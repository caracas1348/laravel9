<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');;

Route::view('/about', 'about')->name('about');



