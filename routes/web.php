<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ninjas', [NinjaController::class, 'index']);

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});


// route wildcard - a catch at the moment

Route::get('/ninjas/{id}', function ($id) { 
    //fetch record from DB  
    return view('ninjas.show', ["id" => $id]);
});