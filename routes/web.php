<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $test = request();
    return view('welcome');
});
