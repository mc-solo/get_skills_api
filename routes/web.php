<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/index', function (){
    return response()->json([
        'purpose' => 'backend api',
        'version' => 'V1',
        'author' => ['
            "Name" => "Wondwosen Asegid",
            "Email" => "wondswosen.asegid@gmail.com",
            "Phone" => "+251911563689",
            "Github" => "mc-solo"
        ']

]);
});