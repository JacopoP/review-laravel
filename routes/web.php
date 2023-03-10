<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])
->name('home');

Route::get('/thing/show/{id}', [MainController::class, 'selectThing'])
->name('thing.show');

Route::get('/thing/create', [MainController::class, 'goCreate'])
->name('thing.create');

Route::post('/thing/add', [MainController::class, 'addThing'])
->name('thing.add');

Route::get('/thing/delete/{id}', [MainController::class, 'delThing'])
->name('thing.delete');