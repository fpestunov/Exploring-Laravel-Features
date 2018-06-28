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
    // 3
    $name = 'Mikkie';
    $age = 23;

    return view('about', compact('name', 'age'));

    // 2
    // return view('about')->with('name', 'Jane');

    // 1
    // return view('about', [
    //     'name' => 'World II'
    // ]);
});

Route::get('/tasks', function () {

    // Query Builder
    // https://laravel.com/docs/5.4/queries

    // return JSON 

    $tasks = DB::table('tasks')->latest()->get();

    $tasks = App\Task::all();

    return view('tasks.index', compact('tasks'));

});

Route::get('/tasks/{task}', function ($id) {

    $task = DB::table('tasks')->find($id);

    //dd($task); // from Helpers function

    return view('tasks.show', compact('task'));

});
