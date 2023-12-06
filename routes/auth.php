<?php 

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {return view('login');})->name('auth.login.show');
Route::post('/login', [LoginController::class , 'authenticate'])->name('auth.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');