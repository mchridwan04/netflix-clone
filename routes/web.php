<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageActionController;
use App\Http\Controllers\PageRomanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RomanceController;
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
// Route Homepage
Route::resource('/', HomeController::class);
Route::get('/action', [PageActionController::class, 'index']);
Route::get('/romance', [PageRomanceController::class, 'index']);
Route::get('/about', function () {return view('homepage.about');});

// Route Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('dashboard/post', PostController::class);
    Route::resource('dashboard/action', ActionController::class);
    Route::resource('dashboard/banner', BannerController::class);
    Route::resource('dashboard/romance', RomanceController::class);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
