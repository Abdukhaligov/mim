<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{
  public function run(){
    $admin = new User(['name' => 'admin', 'email' => 'admin@site.com', 'password' => bcrypt(123456)]);
    $admin->save();
  }
}
