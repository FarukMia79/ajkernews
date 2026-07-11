<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Resources\PhotoResource;
use Illuminate\Http\Request;
use App\Models\Photo;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Photo::latest();

        if ($request->has('search')) {
            $query->where('caption', 'like', '%' . $request->search . '%');
        }

        $photos = $query->paginate(10);

        return PhotoResource::collection($photos);
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
    public function store(StorePhotoRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads/photos/');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(600, 337);
            $image->save($uploadPath . $imageName);

            $data['image'] = 'uploads/photos/' . $imageName;
        }
        
        $photo = Photo::create($data);
        
        return response()->json([
            'message' => 'Photo uploaded successfully',
            'data' => $photo
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $photo = Photo::find($id);
        
        if (!$photo) {
            return response()->json([
                'message' => 'Photo not found'
            ], 404);
        }
        
        return new PhotoResource($photo);
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
        $photo = Photo::find($id);

        if ($photo->image) {
            $imagePath = public_path($photo->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $photo->delete();

        return response()->json([
            'message' => 'Photo deleted successfully'
        ]);
    }
}
