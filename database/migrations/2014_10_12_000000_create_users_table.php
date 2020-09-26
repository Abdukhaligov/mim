<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{
  /**
   * @return void
   */
  public function up(){
    Schema::create('users', function(Blueprint $table){
      $table->id();
      $table->string('login')->unique();
      $table->string('email')->unique();
      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * @return void
   */
  public function down(){
    Schema::dropIfExists('users');
  }
}
