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

Route::get('/concert', function () {
    return view('concert');
})->name('concert');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/albums', function () {
    return view('albums');
})->name('albums');

Route::get('/', function () {
    $data = [
        'name' =>  'AC DC',
        'song' => [
            'Back in Black', 'Thunderstruck', 'T.N.T', 
            'You Shook Me All Night Long', 'Highway To Hell',
            'The Razors Edge', 'Hells Bells'
        ]
    ];
    return view('home',  $data);
});
