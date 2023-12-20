<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteController;

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/visite/create', [VisiteController::class, 'create_show'])->name('visite.create_show');
    Route::post('/visite/create', [VisiteController::class, 'create_visite'])->name('visite.create_visite');
    Route::get('/api/visite/medicament/', [VisiteController::class, 'medicament_lookup'])->name('visite.medicament_lookup');
    Route::get('/api/visite/praticien/', [VisiteController::class, 'praticien_lookup'])->name('visite.praticien_lookup');
});
