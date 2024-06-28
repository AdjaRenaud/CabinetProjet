<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\entreprisesController;
use App\Http\Controllers\espacecandidatureController;
use App\Http\Controllers\espacedemandeentreprisesController;

Route::get('/', function () {
    return view('welcome'); // Exemple : redirige vers la vue welcome.blade.php
})->name('home');

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant    ']);

Route::post('/addcandidature', [EtudiantController::class, 'addcandidature_traitement'])->name('addcandidature');;

Route::post('/adddemandeentrepise', [entreprisesController::class, 'adddemandeentrepise_traitement'])->name('adddemandeentrepise');;


Route::post('/espacecandidature', [espacecandidatureController::class, 'espacecandidature'])->name('espacecandidature');;


Route::controller(espacecandidatureController::class)->prefix('espacecandidature')->group(function () {
    Route::get('/espacecandidature', 'index')->name('espacecandidature');
  
});

Route::controller(espacecandidatureController::class)->prefix('editetudiant')->group(function () {

     Route::get('/editetudiant/{id}', 'edit')->name('editetudiant');
 
});
Route::controller(espacecandidatureController::class)->prefix('deleteetudiant')->group(function () {

    Route::get('/deleteetudiant/{id}', 'delete')->name('deleteetudiant');

});

Route::get('/editetudiant/{id}', [EtudiantController::class, 'edit'])->name('editetudiant');
Route::put('/updatecandidature/{id}', [EtudiantController::class, 'update'])->name('updateetudiant');
Route::delete('/deleteetudiant/{id}', [EtudiantController::class, 'delete'])->name('deleteetudiant');



Route::controller(espacedemandeentreprisesController::class)->prefix('espacedemandeentreprise')->group(function () {
    Route::get('/espacedemandeentreprise', 'index')->name('espacedemandeentreprise');
 
});
// Exemple de route nommée pour le formulaire de candidature
Route::get('/candidature', function () {
    return view('candidature');
})->name('candidature');


Route::get('/demandeentreprise', function () {
    return view('demandeentreprise');
})->name('demandeentreprise');

 
// Exe


Route::controller(espacecandidatureController::class)->prefix('espacecandidature')->group(function(){
    Route::get('', 'index'    )->name('espacecandidature');
    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Exemple de route pour la déconnexion
Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'home'])
    ->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
