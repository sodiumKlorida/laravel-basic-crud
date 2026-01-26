<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'massage'=>'global api is running',
    ]);
});

require __DIR__."/user.php";
