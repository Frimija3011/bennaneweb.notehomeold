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
    
    // Catégories
    Route::get('courses/all', 'NoteController@listByCourses')->name('all-courses');
    Route::get('courses/note/detail/{id}', 'NoteController@detailNoteCourses')->name('detail-course');
    Route::post('courses/note/update/{id}', 'NoteController@updateCourseNote')->name('update-course-note');
    
    Route::get('congelateur/all', 'NoteController@listByCongelateur')->name('all-congelateur');
    Route::get('taches/all', 'NoteController@listByTaches')->name('all-taches');
    Route::get('enfants/all', 'NoteController@listByEnfants')->name('all-enfants');
    Route::get('voiture/all', 'NoteController@listByVoiture')->name('all-voiture');
    Route::get('boucher/all', 'NoteController@listByBoucher')->name('all-boucher');
    
});