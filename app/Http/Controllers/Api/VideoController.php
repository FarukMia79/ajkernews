<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoRequest;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
