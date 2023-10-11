<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    //Aqui podemos modificar que es lo que queremos para el sistema de inicio de sesion
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {    //Si estoy autenticado podre salir de sesion
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
