<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'getHomepage'])->name('pageHomepage');

Route::get('/about', [FrontendController::class, 'getPageAbout'])->name('pageAbout');
Route::get('/work', [FrontendController::class, 'getPageWork'])->name('pageWork');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [BackofficeController::class, 'getDashboard'])->name('dashboard');
    Route::get('/homepage', [BackofficeController::class, 'getHomepage'])->name('homepage');
    Route::get('/projects', [BackofficeController::class, 'getProjects'])->name('projects');
    Route::get('/works', [BackofficeController::class, 'getWorks'])->name('works');
    Route::get('/about-me', [BackofficeController::class, 'getAbout'])->name('about');

    Route::post('/changeInitialBanner', [BackofficeController::class, 'changeInitialBanner'])->name('changeInitialBanner');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
