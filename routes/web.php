<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('page/{slug}', [PageController::class, 'showPage'])->name('page');
Route::resource('contact', MessageController::class)->only(['create', 'store']);

require __DIR__.'/auth.php';
