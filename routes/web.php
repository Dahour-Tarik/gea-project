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

Route::get('/', function () {
    return redirect()->route('clients.index');
});

Route::resource('/clients', 'ClientController')->only(['index', 'show']);

Route::get('/mecaniciens', 'MecanicienController@index')->name('mecaniciens.index');
Route::get('/mecaniciens/{id}', 'MecanicienController@show')->name('mecaniciens.show');

Route::get('/voitures', 'VehiculeController@index')->name('vehicule.index');
Route::get('/voitures/{id}', 'VehiculeController@show')->name('vehicule.show');
//Pour ajouter à une voiture un mecanicien
Route::get('/voitures/add/{id}', 'VehiculeController@addmec')->name('vehicule.addmec');
Route::post('/voitures', 'VehiculeController@store')->name('vehicule.store');

Route::get('/searchClient','ClientController@search')->name('searchClient.search');

Route::post('/nvClient', 'ClientController@addNewClient')->name('nvClient.index');
Route::get('/nvClient', function(){
    return view('newClient.index');
});

Route::post('/nvVoiture', 'VehiculeController@addNewVoiture');
Route::get('/nvVoiture','VehiculeController@getClients')->name('newVoiture.index');
Route::get('/removeClients/{id}', 'ClientController@removeClient');