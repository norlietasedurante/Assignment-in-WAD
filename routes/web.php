<?php

Route::get('/' , 'StudentController@showForm');
Route::post('/process-registration' , 'StudentController@Request_form');

Route::post('/add-students' , 'StudentController@showForm');
Route::post('/show-students' , 'StudentController@showList');
Route::get('/show-students' , 'StudentController@showList');
Route::post('/edit/{id}' , 'StudentController@editform');
Route::post('/update' , 'StudentController@Update');
Route::post('/delete/{id}' , 'StudentController@deleteform');
Route::auth();
