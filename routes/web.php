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
    return view('ticchome');
});

Auth::routes();


Route::get('vragenlijst/{id}', 'VragenlijstController@naarVragenlijst');
Route::post('vragenlijst/{id}', 'VragenlijstController@naarVragenlijstPost');

Route::get('vragenlijst', 'VragenlijstController@Vragen');
Route::get('einde', 'VragenlijstController@einde');

Route::get('oudelijst', function () {
    return view('vragenlijst');
});
