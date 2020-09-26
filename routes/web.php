<?php

use App\Http\Controllers\TemplateController;
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
Route::prefix('template')->group(function(){
  Route::get('/', [TemplateController::class, 'index'])->name('template');
  Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');
  //pages
  Route::get('/team', [TemplateController::class, 'team'])->name('team');
  Route::get('/sponsors', [TemplateController::class, 'sponsors'])->name('sponsors');
  Route::get('/gallery', [TemplateController::class, 'gallery'])->name('gallery');
  Route::get('/faq', [TemplateController::class, 'faq'])->name('faq');
  Route::get('/coming-soon', [TemplateController::class, 'comingSoon'])->name('coming-soon');
  Route::get('/404', [TemplateController::class, 'notFound'])->name('404');
  //tournament
  Route::get('/schedule', [TemplateController::class, 'schedule'])->name('schedule');
  Route::get('/tournament', [TemplateController::class, 'tournament'])->name('tournament');
  Route::get('/match', [TemplateController::class, 'match'])->name('match');
  Route::get('/team-single', [TemplateController::class, 'teamSingle'])->name('team-single');
  Route::get('/player', [TemplateController::class, 'player'])->name('player');
  //other
  Route::get('/checkout', [TemplateController::class, 'checkout'])->name('checkout');
  Route::get('/my-account', [TemplateController::class, 'myAccount'])->name('my-account');
  //blog
  Route::get('/blog-1', [TemplateController::class, 'blog1'])->name('blog-1');
  Route::get('/blog-2', [TemplateController::class, 'blog2'])->name('blog-2');
  Route::get('/blog-3', [TemplateController::class, 'blog3'])->name('blog-3');
  Route::get('/blog-4', [TemplateController::class, 'blog4'])->name('blog-4');
  Route::get('/blog-5', [TemplateController::class, 'blog5'])->name('blog-5');
  Route::get('/single-blog-1', [TemplateController::class, 'singleBlog1'])->name('single-blog-1');
  Route::get('/single-blog-2', [TemplateController::class, 'singleBlog2'])->name('single-blog-2');
  Route::get('/single-blog-3', [TemplateController::class, 'singleBlog3'])->name('single-blog-3');
});
