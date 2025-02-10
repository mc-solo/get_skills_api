<?php

use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;

// Public route for testing API
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the API']);
});

Route::prefix('V1')->group(function(){
    Route::apiResource('reviews', ReviewController::class);
});