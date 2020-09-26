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
}
