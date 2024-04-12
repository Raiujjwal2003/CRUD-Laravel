<?php

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

use App\Http\Controllers\UserController;

Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/userForm', [UserController::class, 'userForm'])->name('form');
Route::post('/save', [UserController::class, 'saveFormData'])->name('save');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');  // form 
Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update-user'); 
Route::patch('/users/{id}/update-flag', [UserController::class, 'updateFlag'])->name('update-flag');

