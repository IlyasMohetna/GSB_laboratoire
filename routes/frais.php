<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraisController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/visiteurs', [FraisController::class, 'visiteurs_show'])->name('frais.visiteurs_show');
    Route::get('/visiteur/recap/{id_visiteur}', [FraisController::class, 'recap_show'])->name('frais.recap_show');
    Route::get('/visiteur/recap/{id_visiteur}/{year}-{month}', [FraisController::class, 'frais_list_show'])->name('frais.frais_list_show');
});
