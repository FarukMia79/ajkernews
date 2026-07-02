<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = SubCategory::with('category')->latest();

        if (request()->search) {
            $query->where("name", "LIKE", "%" . request()->search . "%");
        }

        if (request()->category_id) {
            $query->where("category_id", request()->category_id);
        }

        if (request()->status) {
            $query->where("status", request()->status);
        }

        $category = $query->paginate(10);
        return SubCategoryResource::collection($category);
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
    public function store(StoreSubCategoryRequest $request)
    {
        $subCategory = SubCategory::create($request->all());
        return response()->json($subCategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        return response()->json($subCategory);
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
    public function update(UpdateSubCategoryRequest $request, string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($request->all());
        return response()->json(['message' => 'Sub category updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();
        return response()->json(['message' => 'Sub category deleted successfully']);
    }
}
