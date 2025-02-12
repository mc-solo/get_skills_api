<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Api\V1\CourseController;
use App\Http\Controllers\Api\V1\ReviewController;

// Public route for testing API
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the API']);
});

Route::prefix('V1')->group(function(){
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('courses',CourseController::class);
});