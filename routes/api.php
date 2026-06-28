<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/admin/login', [AuthController::class, 'login']);


// 1. Only for admin
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::apiResource('users',UserController::class);
});

// 2. For admin and editor
Route::middleware(['auth:sanctum', 'role:admin,editor'])->group(function () {
    //
});

// 3. Admin, editor and reporter for everyone
Route::middleware(['auth:sanctum', 'role:admin,editor,reporter'])->group(function () {
    Route::post('/admin/logout', [AuthController::class, 'logout']);
});
