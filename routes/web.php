<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function(){
    Route::get('/',               'home')->name('home');
    //Route::get('cliente',        'cliente')->name('cliente');
    Route::get('cliente/{cliente}', 'cliente')->name('cliente');  //clientes interferia con una ruta de clientes.create
    Route::get('empresas', 'empresas')->name('empresas');

});

Route::redirect('/dashboard', 'clientes' )->name('dashboard');

Route::resource('clientes', ClientesController::class)->middleware(['auth'])->except(['show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';