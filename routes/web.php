<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Request;

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

Route::get('/', [myController::class,'index']);
Route::get('/crud/insertuser', [myController::class,'insertuser']);
Route::post('/crud/store', [myController::class,'store']);
Route::get('crud/edit/{id}', [myController::class,'edit']);
Route::put('crud/update/{id}', [myController::class,'update']);
Route::delete('crud/delete/{id}', [myController::class,'delete']);


// Route::get('/demo', function () {
//   echo "hello laravel";
// });
