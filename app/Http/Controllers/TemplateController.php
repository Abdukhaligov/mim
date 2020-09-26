<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller{
  public function index(){
    return view('template.home');
  }

  public function team(){
    return view('template.pages.team');
  }

  public function sponsors(){
    return view('template.pages.sponsors');
  }

  public function gallery(){
    return view('template.pages.gallery');
  }

  public function faq(){
    return view('template.pages.faq');
  }

  public function comingSoon(){
    return view('template.pages.coming-soon');
  }

  public function notFound(){
    return view('template.pages.404');
  }

  public function schedule(){
    return view('template.tournament.schedule');
  }

  public function tournament(){
    return view('template.tournament.tournament');
  }

  public function match(){
    return view('template.tournament.match');
  }

  public function teamSingle(){
    return view('template.tournament.team');
  }

  public function player(){
    return view('template.tournament.player');
  }

  public function checkout(){
    return view('template.other.checkout');
  }

  public function myAccount(){
    return view('template.other.my-account');
  }

  public function contact(){
    return view('template.contact');
  }

  public function blog1(){
    return view('template.blog.blog-1');
  }

  public function blog2(){
    return view('template.blog.blog-2');
  }

  public function blog3(){
    return view('template.blog.blog-3');
  }

  public function blog4(){
    return view('template.blog.blog-4');
  }

  public function blog5(){
    return view('template.blog.blog-5');
  }

  public function singleBlog1(){
    return view('template.blog.single-blog-1');
  }

  public function singleBlog2(){
    return view('template.blog.single-blog-2');
  }

  public function singleBlog3(){
    return view('template.blog.single-blog-3');
  }
}
