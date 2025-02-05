<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MapageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/ma_page', [MapageController::class, 'regarde_page']);
