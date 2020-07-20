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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/students','StudentController@index');
Route::post('/newstudent','StudentController@register')->name('newstudent');
Route::get('/edit/{student_id}','StudentController@update');
Route::post('/updatedrecord','StudentController@updatedrecord')->name('updatedrecord');
Route::get('/delete/{stud_id}','StudentController@deleterecord');