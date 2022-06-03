<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('etudiant', [Etudiantcontroller::class, "index"]);


Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/connection', function () {
    return view('connection');
});

Route::get('/formulaire', function () {
    return view('formulaire');
});
Route::get('/liste', function () {
    return view('liste');
});