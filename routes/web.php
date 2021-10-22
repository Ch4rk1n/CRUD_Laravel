<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/cadastroProduto', function () {
    return view('cadastroProduto');
});

Route::resource('/products', ProductController::class);
