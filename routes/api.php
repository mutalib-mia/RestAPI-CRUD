<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentsClassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;


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
Route::post('/class/update/{id}',[StudentsClassController::class,'update'])->name('update');
Route::get('/class/delete/{id}',[StudentsClassController::class,'delete'])->name('delete');

//Subject Class Route
Route::get('/subject',[SubjectController::class,'Index'])->name('subject');
Route::post('/subject/store',[SubjectController::class,'Store'])->name('subject.store');
Route::get('/subject/edit/{id}',[SubjectController::class,'Edit'])->name('subject.edit');
Route::post('/subject/update/{id}',[SubjectController::class,'update'])->name('subject.update');
Route::get('/subject/delete/{id}',[SubjectController::class,'delete'])->name('subject.delete');


//Section Class Route
Route::get('/section',[SectionController::class,'Index'])->name('section');
Route::post('/section/store',[SectionController::class,'Store'])->name('section.store');
Route::get('/section/edit/{id}',[SectionController::class,'Edit'])->name('section.edit');
Route::post('/section/update/{id}',[SectionController::class,'update'])->name('section.update');
Route::get('/section/delete/{id}',[SectionController::class,'delete'])->name('section.delete');


//Section Class Route
Route::get('/student',[StudentController::class,'Index'])->name('student');
Route::post('/student/store',[StudentController::class,'Store'])->name('student.store');
Route::get('/student/edit/{id}',[StudentController::class,'Edit'])->name('student.edit');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
