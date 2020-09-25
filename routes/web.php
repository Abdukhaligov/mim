<?php

use App\Http\Controllers\YoutubeAPIController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function(){
  return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [YoutubeAPIController::class, 'test'])->name('youtube_create_url');
Route::get('/test2', [YoutubeAPIController::class, 'test2']);