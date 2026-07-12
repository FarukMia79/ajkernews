<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use App\Http\Resources\VideoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Video::latest();

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $videos = $query->paginate(10);

        return VideoResource::collection($videos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id() ?? 1;

        DB::beginTransaction();

        try {
            $video = Video::create($data);

            if ($request->has('tags') && !empty($request->tags)) {
                $tagIds = [];
                foreach ($request->tags as $tagName) {
                    $trimmedName = trim($tagName);
                    if (!empty($trimmedName)) {
                        $tag = Tag::firstOrCreate(
                            ['name' => $trimmedName],
                            ['slug' => str()->slug($trimmedName)]
                        );
                        $tagIds[] = $tag->id;
                    }
                }
                $video->tags()->sync($tagIds);
            }

            DB::commit();

            return response()->json([
                'message' => 'Video created successfully',
                'video' => $video
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => 'Video creation failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video = Video::findOrFail($id);
        return new VideoResource($video);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, string $id)
    {
        $video = Video::findOrFail($id);
        $data = $request->validated();
        
        DB::beginTransaction();
        try {

            $data['user_id'] = auth()->id();
            $video->update($data);

            if ($request->has('tags') && !empty($request->tags)) {
                $tagIds = [];
                foreach ($request->tags as $tagName) {
                    $trimmedName = trim($tagName);
                    if (!empty($trimmedName)) {
                        $tag = Tag::firstOrCreate(
                            ['name' => $trimmedName],
                            ['slug' => str()->slug($trimmedName)]
                        );
                        $tagIds[] = $tag->id;
                    }
                }
                $video->tags()->sync($tagIds);
            }
            
            DB::commit();
            return response()->json([
                'message' => 'Video updated successfully',
                'video' => $video
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Video update failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::find($id);
        if ($video) {
            $video->delete();
            return response()->json([
                'message' => 'Video deleted successfully'
            ]);
        }
        return response()->json([
            'message' => 'Video not found'
        ], 404);
    }
}
