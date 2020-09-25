<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model{
  use HasFactory;

  const TYPE = [
    "YouTube" => 1,
    "Facebook" => 2,
  ];

  public static function getType($value){
    return array_search($value, self::TYPE);
  }

  public function users(){
    return $this->belongsToMany(User::class, 'users_subscriptions');
  }
}
