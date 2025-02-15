<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/index', function (){
    return view('index');
});