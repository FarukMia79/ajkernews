<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\VideoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/admin/login', [AuthController::class, 'login']);


// 1. Only for admin
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::post('users', [UserController::class, 'store']);
    Route::put('users/{user}', [UserController::class, 'update']);
    Route::delete('users/{user}', [UserController::class, 'destroy']);

    Route::post('category', [CategoryController::class, 'store']);
    Route::put('category/update/{category}', [CategoryController::class,'update']);
    Route::delete('category/{category}', [CategoryController::class,'destroy']);
    
    Route::post('sub-category', [SubCategoryController::class, 'store']);
    Route::put('sub-category/update/{subCategory}', [SubCategoryController::class,'update']);
    Route::delete('sub-category/{subCategory}', [SubCategoryController::class, 'destroy']);

    Route::post('division', [DivisionController::class, 'store']);
    Route::put('division/update/{division}', [DivisionController::class,'update']);
    Route::delete('division/{division}', [DivisionController::class, 'destroy']);

    
});



// 2. For admin and editor
Route::middleware(['auth:sanctum', 'role:admin,editor'])->group(function () {
    Route::delete('news/delete/{news}', [NewsController::class, 'destroy']);
    Route::get('news/{news}', [NewsController::class, 'show']);
    Route::put('news/update/{news}', [NewsController::class,'update']);

    Route::post('tags/store', [TagController::class, 'store']);
    Route::put('tags/update/{tag}', [TagController::class,'update']);
    Route::delete('tags/delete/{tag}', [TagController::class,'destroy']);

    Route::delete('gallery/photo/{photo}', [PhotoController::class,'destroy']);
    
});



// 3. Admin, editor and reporter for everyone
Route::middleware(['auth:sanctum', 'role:admin,editor,reporter'])->group(function () {
    Route::get('users', [UserController::class, 'index']);
    Route::get('users/{user}', [UserController::class, 'show']);

    Route::get('category', [CategoryController::class, 'index']);
    Route::get('category/{category}', [CategoryController::class, 'show']);
    
    Route::get('sub-category', [SubCategoryController::class, 'index']);
    Route::get('sub-category/{subCategory}', [SubCategoryController::class, 'show']);

    Route::get('division', [DivisionController::class, 'index']);
    Route::get('division/{division}', [DivisionController::class, 'show']);

    Route::get('news', [NewsController::class, 'index']);
    Route::post('news/store', [NewsController::class, 'store']);
    Route::get('sub-categories/by-category/{categoryId}', [SubCategoryController::class, 'getByCategory']);

    Route::get('tags', [TagController::class, 'index']);

    Route::post('gallery/photo', [PhotoController::class, 'store']);
    Route::get('gallery/photo', [PhotoController::class,'index']);

    Route::post('video/store', [VideoController::class, 'store']);
    Route::get('gallery/video', [VideoController::class,'index']);
    Route::get('gallery/video/{video}', [VideoController::class,'show']);
    Route::put('gallery/video/update/{video}', [VideoController::class,'update']);
    Route::delete('gallery/video/delete/{video}', [VideoController::class,'destroy']);
    

    Route::post('/admin/logout', [AuthController::class, 'logout']);
});
