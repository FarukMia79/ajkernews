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
use App\Http\Controllers\Api\AdvertisementController;
use App\Http\Controllers\Api\PollController;


Route::post('/admin/login', [AuthController::class, 'login']);


// ===================================================
// secured api routes (no one can access without token)
// ===================================================
Route::middleware('auth:sanctum')->group(function () {

    // -----------------------------------------------
    // shared routes (for admin, editor, reporter)
    // -----------------------------------------------
    Route::middleware('role:admin,editor,reporter')->group(function () {
        // logged in user info
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        // view list (for reporters to see dropdown data when writing news)
        Route::get('category', [CategoryController::class, 'index']);
        Route::get('category/{category}', [CategoryController::class, 'show']);

        Route::get('sub-category', [SubCategoryController::class, 'index']);
        Route::get('sub-category/{subCategory}', [SubCategoryController::class, 'show']);
        Route::get('sub-categories/by-category/{categoryId}', [SubCategoryController::class, 'getByCategory']);

        Route::get('division', [DivisionController::class, 'index']);
        Route::get('division/{division}', [DivisionController::class, 'show']);

        Route::get('tags', [TagController::class, 'index']);

        // news list and news create (reporters can write news)
        Route::get('news', [NewsController::class, 'index']);
        Route::post('news/store', [NewsController::class, 'store']);

        // logout for all
        Route::post('/admin/logout', [AuthController::class, 'logout']);
    });


    // -----------------------------------------------
    // content moderation routes (for admin and editor)
    // -----------------------------------------------
    Route::middleware('role:admin,editor')->group(function () {
        // news update and delete (reporters cannot delete or edit news)
        Route::put('news/update/{news}', [NewsController::class, 'update']);
        Route::delete('news/delete/{news}', [NewsController::class, 'destroy']);

        // tag entry and edit
        Route::post('tags/store', [TagController::class, 'store']);
        Route::put('tags/update/{tag}', [TagController::class, 'update']);
        Route::delete('tags/delete/{tag}', [TagController::class, 'destroy']);

        // photo gallery management
        Route::get('gallery/photo', [PhotoController::class, 'index']);
        Route::post('gallery/photo', [PhotoController::class, 'store']);
        Route::delete('gallery/photo/{photo}', [PhotoController::class, 'destroy']);

        // video gallery management
        Route::post('video/store', [VideoController::class, 'store']);
        Route::get('gallery/video', [VideoController::class, 'index']);
        Route::get('gallery/video/{video}', [VideoController::class, 'show']);
        Route::put('gallery/video/update/{video}', [VideoController::class, 'update']);
        Route::delete('gallery/video/delete/{video}', [VideoController::class, 'destroy']);

        // online poll (Polls)
        Route::get('polls', [PollController::class, 'index']);
        Route::get('polls/{poll}', [PollController::class, 'show']);
        Route::post('polls/store', [PollController::class, 'store']);
        Route::post('polls/update/{poll}', [PollController::class, 'update']);
        Route::delete('polls/{poll}', [PollController::class, 'destroy']);
    });


    // -----------------------------------------------
    // system control routes (only for admin)
    // -----------------------------------------------
    Route::middleware('role:admin')->group(function () {
        // user control (complete CRUD)
        Route::get('users', [UserController::class, 'index']);
        Route::get('users/{user}', [UserController::class, 'show']);
        Route::post('users', [UserController::class, 'store']);
        Route::put('users/{user}', [UserController::class, 'update']);
        Route::delete('users/{user}', [UserController::class, 'destroy']);

        // category create, edit and delete
        Route::post('category', [CategoryController::class, 'store']);
        Route::put('category/update/{category}', [CategoryController::class, 'update']);
        Route::delete('category/{category}', [CategoryController::class, 'destroy']);

        // sub-category create, edit and delete
        Route::post('sub-category', [SubCategoryController::class, 'store']);
        Route::put('sub-category/update/{subCategory}', [SubCategoryController::class, 'update']);
        Route::delete('sub-category/{subCategory}', [SubCategoryController::class, 'destroy']);

        // division create, edit and delete
        Route::post('division', [DivisionController::class, 'store']);
        Route::put('division/update/{division}', [DivisionController::class, 'update']);
        Route::delete('division/{division}', [DivisionController::class, 'destroy']);

        // advertisement or marketing (complete)
        Route::apiResource('advertisements', AdvertisementController::class)->except(['create', 'edit']);
    });
});
