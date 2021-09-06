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
    $comics = config('comics');
    return view('home',[
        'fumetti'=>$comics
    ]);
})->name('homepage ');

Route::get('/comic/{id}', function ($id) {
    //decremento l'id di uno per "sincronizarlo" con l'indice 
    $id -=1;
    $comics = config('comics');
    return view('comic', [
        "id"=>$id,
        'fumetti'=>$comics
    ]);
})->name('comic');
