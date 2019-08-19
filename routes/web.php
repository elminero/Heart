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

Route::resource('/projects', 'ProjectController');

/*
+--------+-----------+-------------------------+------------------+------------------------------------------------+--------------+
| Domain | Method    | URI                     | Name             | Action                                         | Middleware   |
+--------+-----------+-------------------------+------------------+------------------------------------------------+--------------+
|        | GET|HEAD  | /                       |                  | Closure                                        | web          |
|        | GET|HEAD  | api/user                |                  | Closure                                        | api,auth:api |
|        | GET|HEAD  | projects                | projects.index   | App\Http\Controllers\ProjectController@index   | web          |
|        | POST      | projects                | projects.store   | App\Http\Controllers\ProjectController@store   | web          |
|        | GET|HEAD  | projects/create         | projects.create  | App\Http\Controllers\ProjectController@create  | web          |
|        | GET|HEAD  | projects/{project}      | projects.show    | App\Http\Controllers\ProjectController@show    | web          |
|        | PUT|PATCH | projects/{project}      | projects.update  | App\Http\Controllers\ProjectController@update  | web          |
|        | DELETE    | projects/{project}      | projects.destroy | App\Http\Controllers\ProjectController@destroy | web          |
|        | GET|HEAD  | projects/{project}/edit | projects.edit    | App\Http\Controllers\ProjectController@edit    | web          |
+--------+-----------+-------------------------+------------------+------------------------------------------------+--------------+
*/


Route::post('projects/{project}/Tasks', 'TaskController@store');

Route::patch('tasks/{task}', 'TaskController@update');
