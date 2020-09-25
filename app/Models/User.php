<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed email
 */
class User extends Authenticatable{
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];
  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function subscriptions(){
    return $this->belongsToMany(Sponsor::class, 'users_subscriptions');
  }

  public function requiredSubscriptions(){
    $userId = $this->id;
    return Sponsor::where('required', TRUE)
      ->whereDoesntHave('users', function($q) use ($userId){
        $q->where('user_id', $userId);
      })->get();
  }

  public function subscriber(){
    return !count($this->requiredSubscriptions());
  }
}
