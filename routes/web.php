<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/artisan', [ArtisanController::class, 'index'])->name('artisan.index');
Route::post('/artisan', [ArtisanController::class, 'runCommand'])->name('artisan.run');

Route::resource('contact', MessageController::class)->only(['create', 'store']);
Route::get('album', [AlbumController::class, 'index'])->name('album');
Route::get('album/{slub}', [AlbumController::class, 'show'])->name('album.show');

Route::get('{categorySlug}', [PageController::class, 'showPages'])->name('category.pages');
Route::get('{categorySlug}/{subCatSlug}', [PageController::class, 'showPages'])->name('subcategory.pages');

Route::get('{categorySlug}/post/{pageSlug}', [PageController::class, 'catPage'])->name('category.page');
Route::get('{categorySlug}/{subCatSlug}/post/{pageSlug}', [PageController::class, 'subcatPage'])->name('subcategory.page');

// Route::get('pages/{type}/{slug}', [PageController::class, 'showPages'])->name('pages');
