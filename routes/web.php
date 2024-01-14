<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeikaController;
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

Route::get('/',[SeikaController::class,'index']);
Route::get('/fishes/create',[SeikaController::class,'create']);

Route::get('/fishes/{fish}', [SeikaController::class,'show']);
Route::post('/fishes',[SeikaController::class,'store']);

Route::get('/fishes/{fish}/edit', [SeikaController::class, 'edit']);
Route::put('/fishes/{fish}', [SeikaController::class, 'update']);

Route::delete('/fishes/{fish}', [SeikaController::class,'delete']);