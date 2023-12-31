<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalleController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/salle/search', [SalleController::class, 'search_show'])->name('salle.search_show');
    Route::post('/salle/reserver', [SalleController::class, 'reserver'])->name('salle.reserver');
    Route::get('/agences', [SalleController::class, 'agence_lookup'])->name('salle.agence_lookup');
    Route::get('/batiments', [SalleController::class, 'batiment_lookup'])->name('salle.batiment_lookup');
    Route::get('/api/salle/search', [SalleController::class, 'salle_search'])->name('salle.salle_search');
});
