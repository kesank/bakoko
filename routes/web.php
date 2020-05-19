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
Route::get('/test', function () {
    return view('test');
});

/*Route::get('locataires/ajout', 'locataireController@create')->name('loc.create');
Route::post('locataires/validation', 'locataireController@store')->name('loc.store');
Route::get('locataires/{loc}', 'locataireController@show')->name('loc.show');
Route::get('locataires', 'locataireController@create')->name('loc.create');
*/
Route::resource('locataire', 'locataireController');
Route::resource('zone', 'zoneController');

Route::resource('logement', 'logementController');

Route::get('/downloadPDF/{id}','locataireController@downloadPDF');
Route::post('/recherche', 'locataireController@searchpost')->name('locataire.searchpost');

Route::get('/recherche', 'locataireController@search')->name('locataire.search');

