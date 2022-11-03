<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
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

Route::get('/team', [TeamController::class, 'index'])->name('team.view');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.view.all');

Route::get('/blog/category/{id}', [BlogController::class, 'category'])->name('blog.category.view');

Route::get('/blog/tag/{id}', [BlogController::class, 'tag'])->name('blog.tag.view');

Route::get('/blog/{id}', [BlogController::class, 'read'])->name('blog.view.single');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.view');

// Dashboard Routes

Route::prefix('dashboard')->group(function () {

    Route::get('/', [DashboardHomeController::class, 'index']);

    // Sections
    Route::prefix('sections')->group(function () {
        Route::get('/hero', [SectionController::class, 'hero']);
        Route::post('/hero', [SectionController::class, 'hero']);
    });
});
