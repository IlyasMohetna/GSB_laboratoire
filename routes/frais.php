<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraisController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/visiteurs', [FraisController::class, 'visiteurs_show'])->name('frais.visiteurs_show');
    Route::get('/visiteur/recap/annuel/{id_visiteur?}', [FraisController::class, 'recap_show'])->name('frais.recap_show');
    Route::get('/visiteur/frais/{year?}-{month?}/{id_visiteur?}', [FraisController::class, 'frais_list_show'])->name('frais.frais_list_show');
    Route::get('/visiteur/recap/tout_frais', [FraisController::class, 'frais_list_show'])->name('frais.frais_list_show_tout_frais');
    Route::post('/visiteur/recap/{id_visiteur?}', [FraisController::class, 'recap_show'])->name('frais.recap_show_year');
    Route::get('/frais/create/{id_visite}', [FraisController::class, 'frais_create_show'])->name('frais.frais_create_show');
    Route::post('/frais/create/', [FraisController::class, 'frais_create'])->name('frais.frais_create');
    Route::post('/frais/justificative/ia', [FraisController::class, 'frais_justificative_IA'])->name('frais.frais_justificative_IA');
    Route::post('/frais/delete/', [FraisController::class, 'frais_delete'])->name('frais.frais_delete');
    Route::post('/frais/accept/', [FraisController::class, 'frais_accept'])->name('frais.frais_accept');
    Route::post('/frais/decline/', [FraisController::class, 'frais_decline'])->name('frais.frais_decline');
});
