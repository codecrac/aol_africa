<?php

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
use App\Http\Controllers\BackEndController;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');


Route::get('/details', function () {
    return view('details');
})->name('details');

Route::get('/a-propos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/galerie', function () {
    return view('galerie');
})->name('galerie');

Route::get('/import-export', function () {
    return view('import_export');
})->name('import_export');

Route::get('/vente_produit_coreen', function () {
    return view('vente_produit_coreen');
})->name('vente_produit_coreen');



Route::get('/voyage-et-tourisme', function () {
    return view('voyage_tourisme');
})->name('voyage_tourisme');

Route::get('/sport-et-fitness', function () {
    return view('sport_fitness');
})->name('sport_fitness');


// -------------------------------------------------------------------------------

Route::get('/login', function () {
    return view('backend.login');
})->name('login');

Route::post('/se-connecter', 'BackEndController@se_connecter' )->name('se_connecter');
Route::get('/tableau-de-bord', 'BackEndController@tableau_de_bord' )->name('tableau_de_bord');
Route::get('/ajouter-une-categorie', 'BackEndController@ajouter_une_categorie' )->name('ajouter_une_categorie');
Route::get('/liste-des-categories', 'BackEndController@liste_des_categories' )->name('liste_des_categories');


// -------------------------------------------------------------------------------
Route::get('/ajyl-index', 'BackEndController@ajyl_index' )->name('ajyl_index');
Route::get('/ajyl-dossier', 'BackEndController@ajyl_dossier' )->name('ajyl_dossier');

