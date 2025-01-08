<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return inertia('Home');
// });

// Route::inertia('/', 'Home');

// Route::get('/', function(){
//     sleep(2);
//     return Inertia::render('Home', ['name' => 'Mahfuz']);
// });

Route::get('/',[PostController::class,'index']);
Route::resource('posts', PostController::class)->except('index');