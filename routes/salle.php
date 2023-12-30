<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalleController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/salle/search', [SalleController::class, 'search_show'])->name('salle.search_show');
    Route::get('/agences', [SalleController::class, 'agence_lookup'])->name('salle.agence_lookup');
    Route::get('/batiments', [SalleController::class, 'batiment_lookup'])->name('salle.batiment_lookup');
});
