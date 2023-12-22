<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/visites', [VisiteController::class, 'visites_show'])->name('visite.visites_show');
    Route::get('/visite/create', [VisiteController::class, 'create_show'])->name('visite.create_show');
    Route::post('/visite/create', [VisiteController::class, 'create_visite'])->name('visite.create_visite');
    Route::get('/visite/{id_visite}', [VisiteController::class, 'visite_show'])->name('visite.visite_show');
    Route::post('/visite/close', [VisiteController::class, 'visite_close'])->name('visite.visite_close');
    Route::get('/visite/confirmed/{id_visite}', [VisiteController::class, 'create_confirmed'])->name('visite.create_confirmed');
    Route::get('/visite/ordre_mission/{id_visite}', [VisiteController::class, 'generer_ordre_mission'])->name('visite.generer_ordre_mission');
    Route::get('/api/visite/medicament/', [VisiteController::class, 'medicament_lookup'])->name('visite.medicament_lookup');
    Route::get('/api/visite/praticien/', [VisiteController::class, 'praticien_lookup'])->name('visite.praticien_lookup');
});
