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

Route::group(['middleware' => 'web'], function () {
    
    // Authentification
    Route::auth();	
    Route::get('/logout', 'Auth\LoginController@logout');    
    
    // Sondage
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home-root');
    
    // Autocomplete
    Route::get('ajax/villes/{id}', 'AjaxController@autocompletecities');
    
    // Courses
    Route::get('courses/all', 'NoteController@listByCourses')->name('all-courses');
    Route::get('courses/detail/{id}', 'NoteController@detailCourse')->name('detail-course');
    Route::get('courses/nouvelle', 'NoteController@newCourse')->name('new-course');    
    Route::post('courses/edit', 'NoteController@updateCourse')->name('update-course');    
    
    // Tâches    
    Route::get('taches/all', 'NoteController@listByTaches')->name('all-taches');
    
    // Enfants
    Route::get('enfants/all', 'NoteController@listByEnfants')->name('all-enfants');
    
    // Voiture
    Route::get('voiture/all', 'NoteController@listByVoiture')->name('all-voitures');
    
});