<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Http\Resources\AdvertisementResource;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AdvertisementController extends Controller
{
    public function index(Request $request)
    {
        $query = Advertisement::latest();

        if ($request->search) {
            $query->where('client_name', 'like', '%' . $request->search . '%');
        }

        if ($request->placement) {
            $query->where('placement', $request->placement);
        }

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $advertisements = $query->paginate(10);

        return AdvertisementResource::collection($advertisements);
    }

    public function store(StoreAdvertisementRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads/advertisements/');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->cover(970, 90);
            $image->save($uploadPath . $imageName);

            $data['image'] = 'uploads/advertisements/' . $imageName;
        }

        $data['user_id'] = auth()->id();
        $advertisement = Advertisement::create($data);

        return new AdvertisementResource($advertisement);
    }

    public function show(Advertisement $advertisement)
    {
        return new AdvertisementResource($advertisement);
    }

    public function update(UpdateAdvertisementRequest $request, Advertisement $advertisement)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($advertisement->image) {
                $oldImagePath = public_path($advertisement->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads/advertisements/');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->cover(970, 90);
            $image->save($uploadPath . $imageName);

            $data['image'] = 'uploads/advertisements/' . $imageName;
        }

        $advertisement->update($data);

        return new AdvertisementResource($advertisement);
    }

    public function destroy(Advertisement $advertisement)
    {
        if ($advertisement->image) {
            $imagePath = public_path($advertisement->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $advertisement->delete();

        return response()->json(['message' => 'Advertisement deleted successfully']);
    }
}
