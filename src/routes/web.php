<?php


 Route::get('/', function () {


     return view('layouts.master');
 });


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
