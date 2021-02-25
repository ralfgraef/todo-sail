<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/modal/{id}', [TodoController::class, 'modal']);

Route::post('/create', [TodoController::class, 'store']);
Route::post('/delete/{id}', [TodoController::class, 'destroy']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::post('/edit/{id}', [TodoController::class, 'update']);

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


//Route::resource('todos', TodoController::class);
