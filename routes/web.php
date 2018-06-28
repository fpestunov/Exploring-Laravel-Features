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
use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Mikkie';
    $age = 23;

    return view('about', compact('name', 'age'));
});

Route::get('/tasks', function () {

    $tasks = Task::all();

    $tasks = Task::where('completed', 0)->get();
    $tasks = Task::incomplete();

    return view('tasks.index', compact('tasks'));

});

Route::get('/tasks/{task}', function ($id) {

    $task = Task::find($id);

    //dd($task); // from Helpers function

    return view('tasks.show', compact('task'));

});
