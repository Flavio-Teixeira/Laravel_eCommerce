<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\StoreController;

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

Route::get('/admin/stores', [StoreController::class, 'index']);
Route::get('/admin/stores/create', [StoreController::class, 'create']);

Route::post('/admin/stores/store', [StoreController::class, 'store']);
