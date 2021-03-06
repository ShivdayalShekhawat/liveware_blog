<?php

use Illuminate\Support\Facades\Route;
use \App\Http\LoginController;
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
    return view('welcome');
});


Route::get('/home',\App\Http\Livewire\Home::class);


Route::get('/post', function () {
    return view('livewire/show-posts');
});


Route::get('/post-create',\App\Http\Livewire\PostCreate::class);

Route::get('/post/{slug}',\App\Http\Livewire\Post::class);

Route::get('/login' , function () {
    return view('login');
});