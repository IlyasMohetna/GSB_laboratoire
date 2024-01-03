<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParametrageController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/parametrage/vehicule_service', [ParametrageController::class, 'vehicule_service_show'])->name('parametrage.vehicule_service_show');
    Route::get('/parametrage/vehicule_service/create', [ParametrageController::class, 'vehicule_service_create_show'])->name('parametrage.vehicule_service_create_show');
    Route::post('/parametrage/vehicule_service/create', [ParametrageController::class, 'vehicule_service_create'])->name('parametrage.vehicule_service_create');
    Route::get('/parametrage/utilisateurs', [ParametrageController::class, 'users_show'])->name('parametrage.users_show');
    Route::get('/parametrage/utilisateur/create', [ParametrageController::class, 'user_create_show'])->name('parametrage.user_create_show');
    Route::post('/parametrage/utilisateur/create', [ParametrageController::class, 'user_create'])->name('parametrage.user_create');
    Route::get('/parametrage/agences', [ParametrageController::class, 'agences_show'])->name('parametrage.agences_show');
    Route::get('/api/agences', [ParametrageController::class, 'agences_yajra'])->name('parametrage.agences_yajra');
});
