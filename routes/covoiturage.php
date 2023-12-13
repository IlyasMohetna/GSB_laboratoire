<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovoiturageController;
use App\Http\Controllers\ParametrageController;

Route::get('/covoiturage/create', [CovoiturageController::class, 'annonce_create_show'])->name('covoiturage.annonce_create_show');
Route::post('/covoiturage/create', [CovoiturageController::class, 'annonce_create_action'])->name('covoiturage.annonce_create_action');
Route::get('/covoiturage/search', [CovoiturageController::class, 'annonce_search_show'])->name('covoiturage.annonce_search_show');
Route::get('/api/covoiturage/search', [CovoiturageController::class, 'annonce_search_action'])->name('covoiturage.annonce_search_action');

Route::get('/ville', [ParametrageController::class, 'ville_lookup'])->name('covoiturage.ville_lookup');