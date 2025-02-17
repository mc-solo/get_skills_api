<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Api\V1\CourseController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\AuthController;

// Public route for testing API
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the API']);
});

Route::prefix('V1')->group(function(){
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('courses',CourseController::class);
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout', [AuthController::class, 'logout']);
});