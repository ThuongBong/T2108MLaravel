<?php
Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/about', [WebController::class, 'aboutUs']); //about la link dan sau url
