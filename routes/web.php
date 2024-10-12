<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectController;

Route::get('/', function () {
    return view('welcome');
});

//Autentificación
Route::get('/login', [ConnectController::class, 'getLogin'])->name('login'); //Creamos la ruta para la interface de login
Route::get('/register', [ConnectController::class, 'getRegister'])->name('register');//Creamos ruta para la interface de registro
Route::get('/recover', [ConnectController::class, 'getRecover'])->name('recover');//Creamos la ruta para la interface de recuperar contraseña