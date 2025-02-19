<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'purpose' => 'backend api',
        'version' => 'V1',
        'authors' => [
            [
                "name" => "Wondwosen Asegid",
                "email" => "wondwosen.asegid@gmail.com",
                "phone" => "+251911563689",
                "github" => "mc-solo"
            ],
            [
                "name" => "Emmanuel Alem",
                "email" => "emmaalem012@gmail.com",
                "phone" => "+251904601186",
                "github" => "Emmanuel-Alem"
            ]
        ]
    ]);
});

Route::get('/test-payment', function(){
    $tx_ref = 'negade-'.uniqid();
    return view('index', compact('tx_ref'));
});