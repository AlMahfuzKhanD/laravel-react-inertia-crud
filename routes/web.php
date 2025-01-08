<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Home');
// });

// Route::inertia('/', 'Home');

Route::get('/', function(){
    sleep(2);
    return Inertia::render('Home', ['name' => 'Mahfuz']);
});
