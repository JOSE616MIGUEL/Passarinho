<?php

use Illuminate\Support\Facades\Route;
//Agregar esta clase para redireccionar 
use Illuminate\Support\Facades\Redirect;


//Agregar esta línea para redireccionar al momento de solo ingresar /Mi_blog
Route::get('/Passarinho', function () {
    return redirect('/Passarinho/public');
});

Route::get('/', function () {
    return view('destacado');
})->name('Destacado');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
