<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

Route::get('/chi-siamo', function () {
    return view('pages.chi-siamo');
})->name('chi-siamo');

Route::get('/eventi', function () {
    return view('pages.eventi');
})->name('eventi');
