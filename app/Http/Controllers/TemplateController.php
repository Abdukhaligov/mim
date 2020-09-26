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
}
