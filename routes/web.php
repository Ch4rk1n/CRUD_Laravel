<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('login');
});
Route::get('/cadastroProduto', function () {
    return view('cadastroProduto');
});

Route::resource('/products', ProductController::class);
