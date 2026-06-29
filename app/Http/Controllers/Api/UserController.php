<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::latest();

        // 1. Search by name or email
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'LIKE', "%{$request->search}%")
                    ->orWhere('email', 'LIKE', "%{$request->search}%");
            });
        }

        // 2. Filter by role
        if ($request->role) {
            $query->where('role', $request->role);
        }

        $users = $query->paginate(10);
        return UserResource::collection($users);
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
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads/users/');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(300, 300);
            $image->save($uploadPath . $imageName);

            $data['image'] = 'uploads/users/' . $imageName;
        }

        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return response()->json([
            'status' => 'success data retrieved',
            'user' => $user
        ], 200);
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
    public function update(UpdateUserRequest $request, string $id)
    {
        $data = $request->validated();
        $user = User::find($id);

        if ($request->hasFile('image')) {
            if ($user->image) {
                $imagePath = public_path($user->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }


            $file = $request->file("image");
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads/users/');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(300, 300);
            $image->save($uploadPath . $imageName);

            $data['image'] = 'uploads/users/' . $imageName;
        }

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }


        $user->update($data);

        return response()->json([
            'status' => 'success data updated',
            'message' => 'User updated successfully',
            'user' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if ($user->image) {
            $imagePath = public_path($user->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $user->delete();
        return response()->json([
            'status' => 'success data deleted',
            'message' => 'User deleted successfully'
        ], 200);
    }
}
