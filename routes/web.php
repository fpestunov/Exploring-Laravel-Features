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

    // Query Builder
    // https://laravel.com/docs/5.4/queries

    // return JSON 
    $tasks = DB::table('tasks')->get(); 
    $tasks = DB::table('tasks')->latest()->get();

    return view('about', compact('name', 'age', 'tasks'));

    // 2
    // return view('about')->with('name', 'Jane');

    // 1
    // return view('about', [
    //     'name' => 'World II'
    // ]);
});

Route::get('/tasks/{task}', function ($id) {

    $task = DB::table('tasks')->find($id);

    //dd($task); // from Helpers function

    return view('tasks.show', compact('task'));

});
