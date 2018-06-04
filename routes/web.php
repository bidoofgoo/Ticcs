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

<<<<<<< HEAD
Route::get('vragenlijst/{id}', 'VragenlijstController@naarVragenlijst');
=======
Route::get('vragenlijst/1', 'VragenlijstController@naarVragenlijst');
Route::post('vragenlijst/1', 'VragenlijstController@naarVragenlijst');
Route::post('vragenlijst/2', 'VragenlijstController@naarVragenlijst');
Route::post('vragenlijst/3', 'VragenlijstController@naarVragenlijst');
Route::post('vragenlijst/4', 'VragenlijstController@naarVragenlijst');

Route::get('vragenlijst', 'VragenlijstController@Vragen');
>>>>>>> d133f837cbda11eb2eb6e35a01a4515e4a3c20d0
