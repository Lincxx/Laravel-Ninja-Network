<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ninjas', function () {
    $ninjas = [
        ["name" =>"mario", "skill" => 75, "id" => "1"],
        ["name" =>"luigi", "skill" => 45, "id" => "2"],
    ];
    
    return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});


// route wildcard

Route::get('/ninjas/{id}', function ($id) { 
    //fetch record from DB  
    return view('ninjas.show', ["id" => $id]);
});