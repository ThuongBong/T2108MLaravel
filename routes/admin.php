<?php
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScoreController;


Route::get('/', function () {
    return view('welcome');
});
//routing form
Route::get('/classes-create', [\App\Http\Controllers\ClassesController::class, 'classesForm']);
Route::post('/classes-create', [\App\Http\Controllers\ClassesController::class, 'classesCreate']);
Route::get('/classes-edit', [ClassesController::class, 'classesEdit']);

//Route::group(['prefix'=>"student","middleware"=>["is_admin],function () {
//
//}); dung de group route
Route::get('/students-list', [\App\Http\Controllers\StudentController::class, 'listStudents']);
Route::get('/student-create', [\App\Http\Controllers\StudentController::class, 'form']);
Route::post('/student-create', [\App\Http\Controllers\StudentController::class, 'Create']);

Route::get('/student-edit/{id}', [\App\Http\Controllers\StudentController::class, 'editStudents']);
Route::put('/student-edit/{student}', [\App\Http\Controllers\StudentController::class, 'updateStudents']);
//Route::put('/student-edit/{student:studentID}', [\App\Http\Controllers\StudentController::class, 'updateStudents']);
//Neu nhieu hon 1 cot rang buoc thi nen dung StudentID de nó tim den cot studentID
Route::delete('/student-delete/{student}', [\App\Http\Controllers\StudentController::class, 'deleteStudents']);

Route::get('/subject-create', [\App\Http\Controllers\SubjectController::class, 'subjectForm']);
Route::post('/subject-create', [\App\Http\Controllers\SubjectController::class, 'subjectCreate']);
Route::get('/subject-edit', [SubjectController::class, 'subjectEdit']);

Route::get('/score-create', [\App\Http\Controllers\ScoreController::class, 'scoreForm']);
Route::post('/score-create', [\App\Http\Controllers\ScoreController::class, 'scoreCreate']);
Route::get('/score-edit', [\App\Http\Controllers\ScoreController::class, 'scoreEdit']);

//routing tables
Route::get('/classes-list', [\App\Http\Controllers\ClassesController::class, 'listClasses']);
Route::get('/subjects-list', [\App\Http\Controllers\SubjectController::class, 'listSubject']);
Route::get('/scores-list', [\App\Http\Controllers\ScoreController::class, 'listScores']);
