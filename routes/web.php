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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

/*
 * GET      /projects               (index)
 * GET      /projects/create        (create)
 * GET      /projects/1             (show)
 * POST     /projects               (store)
 * GET      /projects/1/edit        (edit)
 * PATCH    /projects/1             (update)
 * DELETE   /projects/1             (destroy)
 */

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project_id}', 'ProjectsController@show');

Route::get('/projects/{project_id}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project_id}', 'ProjectsController@update');

Route::delete('/projects/{project_id}', 'ProjectsController@destroy');

//Route::get('/', function () {
//
//    $tasks = [
//        'Goto the school',
//        'Goto the market',
//        'Goto Work'
//    ];
//    $foo = 'foo';
//
////    return view('welcome')->withTasks('tasks')->withFoo('foo');
//
//    return view('welcome', [
//        'tasks' => $tasks
//    ]);
//});

//Route::get('/contact', function(){
//    return view('contact');
//});

//Route::get('/about', function(){
//    return view('about');
//});
