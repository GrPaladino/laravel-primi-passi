<?php

use Illuminate\Support\Facades\Route;

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
    $title = "Il mio primo progetto Laravel";
    $paragraph = "Gli alunni della classe 117 sono:";
    $students = config("students");
    return view('home', compact("title", "paragraph", "students"));
});
