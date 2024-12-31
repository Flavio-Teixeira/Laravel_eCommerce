<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $helloworld = 'Hello World';
    return view('welcome', ['helloworld' => $helloworld]);
});

Route::get('/model', function(){
    //$products = \App\Product::all();

    $user = new \App\Models\User();
    $user->name = 'Usuário Teste';
    $user->email = 'email@teste.com';
    $user->password = bcrypt('12345678');

    //return $user->save();
    return \App\Models\User::all();


    //return $products;
});
