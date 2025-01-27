<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produits',ProduitController::class);
Route::get('/formulaire',[FormController::class, 'showForm'])->name('formulaire.show');
Route::get('/formulaire',[FormController::class, 'handleForm'])->name('formulaire.handle');