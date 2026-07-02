<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDivisionRequest;
use App\Http\Requests\UpdateDivisionRequset;
use App\Http\Resources\DivisionResource;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Division::latest();
        
        if ($request->search) {
            $query->where('name', 'LIKE', "%{$request->search}%");
        }
        
        $divisions = $query->paginate(10);
        return DivisionResource::collection($divisions);
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
    public function store(StoreDivisionRequest $request)
    {
        $division = Division::create($request->validated());
        return response()->json(['message' => 'Division created successfully'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $division = Division::find($id);
        return response()->json($division);
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
    public function update(UpdateDivisionRequset $request, string $id)
    {
        $division = Division::find($id);
        $division->update($request->validated());
        return response()->json(['message' => 'Division updated successfully'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $division = Division::find($id);
        $division->delete();
        return response()->json(['message' => 'Division deleted successfully'],200);
    }
}
