<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/viewer/{justificativeId}', [DocumentController::class, 'viewer'])->name('document.viewer');
    Route::get('/downloader/{justificativeId}', [DocumentController::class, 'downloader'])->name('document.downloader');
});
