<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

//home
Route::get('/about', [WebController::class, 'aboutUs']); //about la link dan sau url

//routing form
Route::get('/classes-create', [WebController::class, 'classesCreate']);
Route::get('/classes-edit', [WebController::class, 'classesEdit']);
Route::get('/student-create', [WebController::class, 'studentCreate']);
Route::get('/student-edit', [WebController::class, 'studentEdit']);
Route::get('/subject-create', [WebController::class, 'subjectCreate']);
Route::get('/subject-edit', [WebController::class, 'subjectEdit']);
Route::get('/score-create', [WebController::class, 'scoreCreate']);
Route::get('/score-edit', [WebController::class, 'scoreEdit']);

//routing tables
Route::get('/classes-list', [\App\Http\Controllers\ClassesController::class, 'listClasses']);
Route::get('/students-list', [\App\Http\Controllers\StudentController::class, 'listStudents']);
Route::get('/subjects-list', [WebController::class, 'listSubject']);
Route::get('/scores-list', [WebController::class, 'listScores']);


