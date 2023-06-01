<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//Hauptroute
Route::get('/', 'App\Http\Controllers\StudentController@list');

//Schülerlogin
Route::post('login', 'App\Http\Controllers\StudentController@login');
Route::get('studentLogin', 'App\Http\Controllers\StudentController@studentLogin');

//Lehrerlogin
Route::get('/teacherShowLoginView', 'App\Http\Controllers\TeacherController@teacherShowLoginView');
Route::post('teacherLogin', 'App\Http\Controllers\TeacherController@teacherLogin');

//AdminLogin

Route::post('adminEinloggen', 'App\Http\Controllers\AdminController@login');
Route::get('/adminShowLoginView', 'App\Http\Controllers\AdminController@adminShowLoginView');
Route::get('/admin', 'App\Http\Controllers\AdminController@admin');
Route::post('view-status', 'App\Http\Controllers\AdminController@update');



//Admintools

Route::post('importTeacher', 'App\Http\Controllers\AdminController@importTeacher');
Route::post('importStudent', 'App\Http\Controllers\AdminController@importStudent');


//Logout
Route::get('logoutStudent', 'App\Http\Controllers\StudentController@logoutStudent');
Route::get('/logoutTeacher', 'App\Http\Controllers\TeacherController@logoutTeacher');
Route::get('logoutAdmin', 'App\Http\Controllers\AdminController@logoutAdmin');

//Terminauswahl

Route::get('/teacherOption', 'App\Http\Controllers\TeacherController@teacherOption');

Route::get('/terminAuswahl', 'App\Http\Controllers\StudentController@terminAuswahl');
Route::get('/termine', 'App\Http\Controllers\StudentController@termine');

//Reservierungsfunktionen
Route::post('bookAppointment', 'App\Http\Controllers\StudentController@bookAppointment');
Route::post('deleteAppointment', 'App\Http\Controllers\StudentController@deleteAppointment');

//Terminansichten
Route::get('/termineStudent', 'App\Http\Controllers\StudentController@termineStudent');

//LehrerTermin

Route::get('/teacherConfigTermine', 'App\Http\Controllers\TeacherController@teacherConfigTermine');
Route::post('/teacherTool', 'App\Http\Controllers\TeacherController@teacherTool');
Route::get('/termineTeacher', 'App\Http\Controllers\TeacherController@termineTeacher');
Route::get('/fehlendeLehrer', 'App\Http\Controllers\AdminController@fehlendeLehrer');