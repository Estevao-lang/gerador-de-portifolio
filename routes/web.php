<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::post('/generate-portfolio', [PortfolioController::class, 'generatePortfolio'])->name('generatePortfolio');

Route::get('/', function () {
    return view('welcome');
});
