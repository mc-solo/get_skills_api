<?php 

use App\Http\Controllers\CourseController;

Route::middleware(['auth', 'web'])->group(function(){
    Route::get('/courses', [CourseController::class, 'index']);
    Route::post('/courses', [CourseController::class, 'store']);
});