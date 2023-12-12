<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovoiturageController;

Route::get('/covoiturage/create', [CovoiturageController::class, 'annonce_create_show'])->name('covoiturage.annonce_create_show');
Route::post('/covoiturage/create', [CovoiturageController::class, 'annonce_create_action'])->name('covoiturage.annonce_create_action');
Route::get('/ville', [CovoiturageController::class, 'ville_lookup'])->name('covoiturage.ville_lookup');