<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::post('/generate-portfolio', [PortfolioController::class, 'generatePortfolio'])->name('generatePortfolio');


Route::get('/', function () {
    return view('welcome');
});
