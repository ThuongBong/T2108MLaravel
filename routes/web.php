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
Route::get('/classes-create', [\App\Http\Controllers\ClassesController::class, 'classesForm']);
Route::post('/classes-create', [\App\Http\Controllers\ClassesController::class, 'classesCreate']);
Route::get('/classes-edit', [WebController::class, 'classesEdit']);

Route::get('/student-create', [\App\Http\Controllers\StudentController::class, 'form']);
Route::post('/student-create', [\App\Http\Controllers\StudentController::class, 'Create']);

Route::get('/student-edit', [WebController::class, 'studentEdit']);

Route::get('/subject-create', [\App\Http\Controllers\SubjectController::class, 'subjectForm']);
Route::post('/subject-create', [\App\Http\Controllers\SubjectController::class, 'subjectCreate']);
Route::get('/subject-edit', [WebController::class, 'subjectEdit']);

Route::get('/score-create', [\App\Http\Controllers\ScoreController::class, 'scoreForm']);
Route::post('/score-create', [\App\Http\Controllers\ScoreController::class, 'scoreCreate']);
Route::get('/score-edit', [\App\Http\Controllers\ScoreController::class, 'scoreEdit']);

//routing tables
Route::get('/classes-list', [\App\Http\Controllers\ClassesController::class, 'listClasses']);
Route::get('/students-list', [\App\Http\Controllers\StudentController::class, 'listStudents']);
Route::get('/subjects-list', [\App\Http\Controllers\SubjectController::class, 'listSubject']);
Route::get('/scores-list', [\App\Http\Controllers\ScoreController::class, 'listScores']);


