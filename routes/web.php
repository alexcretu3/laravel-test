<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\Auth\LoginController;

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

Auth::routes();
Route::get('/', [ContractController::class, 'index']);
Route::group(['middleware' => 'auth'], function(){
	Route::resource('tasks', TaskController::class);// Ruta de resurse va genera CRUD
    Route::resource('contracts', ContractController::class);// Ruta de resurse va genera CRUD
});