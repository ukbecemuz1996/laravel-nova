<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [HomeController::class, 'index'])->name('home.view');

Route::get('/about', [AboutController::class, 'index'])->name('about.view');

Route::get('/services', [ServicesController::class, 'index'])->name('services.view');

Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolio.view.all');

Route::get('/portfolios/{id}', [PortfolioController::class, 'read'])->name('portfolio.view.single');
