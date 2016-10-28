<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


//Rotas Visitantes
Route::get('/', "PlateOnController@index");
Route::auth();
Route::get('/logout', "PlateOnController@logout");

Route::post('/saveProf', "PlateOnController@saveProf")->name('saveProf');
Route::get('/v_contato', "PlateOnController@v_contato");
Route::get('/v_disciplinas', "PlateOnController@v_disciplinas");
Route::get('/v_resumos/{id}', "PlateOnController@v_resumos");

//Rotas Prof
Route::get('/p', "PlateOnController@p")->middleware('auth');
Route::get('/p_agenda', "PlateOnController@p_agenda")->middleware('auth');
Route::get('/p_contato', "PlateOnController@p_contato")->middleware('auth');
Route::get('/p_disciplinas', "PlateOnController@p_disciplinas")->middleware('auth');
Route::get('/p_edit', "PlateOnController@p_edit")->middleware('auth');
Route::get('/p_exer', "PlateOnController@p_exer")->middleware('auth');
Route::get('/p_resumos/{id}', "PlateOnController@p_resumos")->middleware('auth');


//Rotas Aluno
Route::get('/u', "PlateOnController@u");
Route::get('/u_agenda', "PlateOnController@u_agenda");
Route::get('/u_contato', "PlateOnController@u_contato");
Route::get('/u_disciplinas', "PlateOnController@u_disciplinas");
Route::get('/u_edit', "PlateOnController@u_edit");
Route::get('/u_exer', "PlateOnController@u_exer");
Route::get('/u_resumos/{id}', "PlateOnController@u_resumos");


//Rotas Auxiliares / Inutilizadas
Route::post('/save', "PlateOnController@save")->name('save');
Route::get('/exit', "Auth\AuthController@__construct");

Route::get('/home', 'HomeController@index');
