<?php

namespace App\Http\Controllers;

class TemplateController extends Controller{
  public function index(){
    return view('home');
  }

  public function team(){
    return view('pages.team');
  }

  public function sponsors(){
    return view('pages.sponsors');
  }

  public function gallery(){
    return view('pages.gallery');
  }

  public function faq(){
    return view('pages.faq');
  }

  public function comingSoon(){
    return view('pages.coming-soon');
  }

  public function notFound(){
    return view('pages.404');
  }

  public function schedule(){
    return view('tournament.schedule');
  }

  public function tournament(){
    return view('tournament.tournament');
  }

  public function match(){
    return view('tournament.match');
  }

  public function teamSingle(){
    return view('tournament.team');
  }

  public function player(){
    return view('tournament.player');
  }

  public function join(){
    return view('join');
  }

  public function contact(){
    return view('contact');
  }

  public function blog1(){
    return view('blog.blog-1');
  }

  public function blog2(){
    return view('blog.blog-2');
  }

  public function blog3(){
    return view('blog.blog-3');
  }

  public function blog4(){
    return view('blog.blog-4');
  }

  public function blog5(){
    return view('blog.blog-5');
  }

  public function singleBlog1(){
    return view('blog.single-blog-1');
  }

  public function singleBlog2(){
    return view('blog.single-blog-2');
  }

  public function singleBlog3(){
    return view('blog.single-blog-3');
  }
}
