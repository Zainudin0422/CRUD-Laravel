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
    return view('welcome');
});

Route::get('/questions', 'questions_controller@index');

Route::post('/questions', 'questions_controller@store');

Route::get('/questions/create', 'questions_controller@create');

Route::delete('/questions/{question}', 'questions_controller@destroy');

Route::patch('/questions/{question}', 'questions_controller@update');

Route::get('/questions/{question}/edit', 'questions_controller@edit');


Route::post('/answers', 'answers_controller@store');

Route::get('/answers/{questions}', 'answers_controller@index');
