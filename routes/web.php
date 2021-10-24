<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('/', loginController::class);
Route::post('/auth',[loginController::class,'auth'])->name('auth.admins');

Route::get('/cadastroProduto', function () {
    return view('cadastroProduto');
});

Route::resource('/products', ProductController::class);