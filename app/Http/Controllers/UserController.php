<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
  /**
   * @return void
   */
  public function __construct(){
    $this->middleware('auth');
  }

  public function profile(){
    $user = Auth::user();
    $data["user"] = json_decode((new UserResource($user))->toJson());
    return view('profile', compact('data'));
  }
}
