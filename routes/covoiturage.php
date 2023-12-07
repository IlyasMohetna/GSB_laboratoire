<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovoiturageController;

Route::get('/covoiturage/create', [CovoiturageController::class, 'create_show'])->name('covoiturage.create_show');
Route::get('/ville', [CovoiturageController::class, 'ville_lookup'])->name('covoiturage.ville_lookup');
