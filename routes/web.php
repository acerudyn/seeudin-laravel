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

/*
Route::get('/projects', function () {
    return view('projects');
});
*/

Route::get('/project/{cat}', 'ProjectController@category');
Route::get('/', 'HomeController@index');
Route::get('/projects', 'ProjectController@index');
Route::post('/create', 'ContactController@store');

Route::get('/notfound', function () {
    return view('page404');
});
