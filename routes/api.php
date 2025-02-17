<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Api\V1\CourseController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\AuthController;



Route::prefix('V1')->group(function () {
    // Public routes
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
    });

    // Resources
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('courses', CourseController::class);
});


