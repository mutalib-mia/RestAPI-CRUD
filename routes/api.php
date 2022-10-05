<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentsClassController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/class',[StudentsClassController::class,'Index'])->name('class');
Route::post('/class/store',[StudentsClassController::class,'Store'])->name('store');
Route::get('/class/edit/{id}',[StudentsClassController::class,'Edit'])->name('edit');
