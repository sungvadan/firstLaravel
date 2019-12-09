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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');


/**
 * GET /projects (index) => all projects
 * GET /projects/create (create) => show the form
 * POST /projects (store) => save new project
 * GET /projects/1 (show)
 * GET /projects/1/edit (edit) => edit the project
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 */

//Route::get('/projects', 'ProjectsController@index');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{project}', 'ProjectsController@show');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
//Route::patch('/projects/{project}', 'ProjectsController@update');
//Route::delete('/projects/{project}', 'ProjectsController@delete');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

