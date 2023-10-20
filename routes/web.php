<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\TuteurController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/delete-etudiant/{id}',[EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}',[EtudiantController::class, 'update_etudiant']);

Route::post('/update/traitement',[EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/etudiant',[EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter',[EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);



/////////////////////////////////////////////////////////////////
Route::get('/delete-tuteur/{id}',[TuteurController::class, 'delete_tuteur']);
Route::get('/update1-tuteur/{id}',[TuteurController::class, 'update1_tuteur']);

Route::post('/update1/traitement1',[TuteurController::class, 'update1_tuteur_traitement1']);
Route::get('/tuteur',[TuteurController::class, 'liste_tuteur']);
Route::get('/ajouter1',[TuteurController::class, 'ajouter1_tuteur']);
Route::post('/ajouter1/traitement1',[TuteurController::class, 'ajouter1_tuteur_traitement1']);



