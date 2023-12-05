<?php 

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {return view('login');});
Route::post('/login', [LoginController::class , 'authenticate']);