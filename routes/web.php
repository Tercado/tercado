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

Route::get('/','Tercado@accueil');
Route::get('/presentation','Tercado@presentation');
Route::get('/equipe','Tercado@equipe');
Route::get('/restaurant','Tercado@restaurant');
Route::get('/carte','Tercado@carte');
Route::get('/bar', 'Tercado@bar');
Route::get('/boutique', 'Tercado@boutique');
Route::get('/horaire', 'Tercado@horaire');
Route::get('/evenement', 'Tercado@evenement');
Route::get('/artiste', 'Tercado@artiste');
Route::get('/burger', 'Tercado@burger');