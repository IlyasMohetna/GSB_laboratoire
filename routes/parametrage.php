<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParametrageController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/parametrage/vehicule_service', [ParametrageController::class, 'vehicule_service_show'])->name('parametrage.vehicule_service_show');
    Route::get('/parametrage/vehicule_service/create', [ParametrageController::class, 'vehicule_service_create_show'])->name('parametrage.vehicule_service_create_show');
    Route::post('/parametrage/vehicule_service/create', [ParametrageController::class, 'vehicule_service_create'])->name('parametrage.vehicule_service_create');
});
