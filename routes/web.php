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
    return view('mainlayout');
});
Route::get('dashboard/charge', [
    'as'=>'charge',
    'uses'=>'viewController@viewCharge'
]);
Route::get('dashboard/chiffre_affaire',[
    'as'=>'chiffre',
    'uses'=>'viewController@viewChiffreAff'
]);
Route::get('/dashboard/prix_heure',[
    'as'=>'prixH',
    'uses'=>'viewController@viewPrixH'
]);
Route::get('/dashboard/rentabilité',[
    'as'=>'rentab',
    'uses'=>'viewController@viewRent'
]);
Route::get('/dashboard/qualité',[
    'as'=>'quality',
    'uses'=>'viewController@viewQuality'
]);
Route::get('/dashboard/ressources_humaine',[
    'as'=>'rh',
    'uses'=>'viewController@viewRH'
]);
Route::get('/dashboard/formation',[
    'as'=>'formation',
    'uses'=>'viewController@viewFormation'
]);
Route::get('/dashboard/rémunération',[
    'as'=>'remun',
    'uses'=>'viewController@viewRemun'
]);
Route::get('/dashboard/marque_emplr',[
    'as'=>'brand',
    'uses'=>'viewController@viewBranding'
]);

