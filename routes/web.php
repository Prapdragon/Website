<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/introduce', function () {
    return view('introduce');
});
Route::get('/Home', function () {
    return view('introduce');
});
Route::get('/grade', function () {
    return view('grade');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/skill', function () {
    return view('Skill');
});



