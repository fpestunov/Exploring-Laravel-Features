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

Route::get('/about', function () {
    $name = 'Mikkie';
    $age = 23;

    return view('about', compact('name', 'age'));
});

// make nice and simple
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');

Route::get('/', 'PostsController@index');

// we need:
// 1. controller => PostsController
// php artisan make:controller Posts Controller
// 2. elouqent model => Post 
// php artisan make:model Post
// 3. migration => create_posts_table
// php artisan make:migration create_posts_table --create=posts

// OR all together
// php artisan make:model Post -mc
// php artisan migrate

Route::get('/posts/{post}', 'PostsController@show');
