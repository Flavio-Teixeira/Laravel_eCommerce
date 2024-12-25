<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $helloworld = 'Hello World';
    return view('welcome', ['helloworld' => $helloworld]);
});
