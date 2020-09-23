<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSubscriptionsTable extends Migration{
  /**
   * @return void
   */
  public function up(){
    Schema::create('users_subscriptions', function(Blueprint $table){
      $table->id();
      $table->bigInteger('user_id')->unsigned();
      $table->bigInteger('sponsor_id')->unsigned();
      $table->foreign('user_id')->on('users')->references('id')->onDelete('CASCADE');
      $table->foreign('sponsor_id')->on('sponsors')->references('id')->onDelete('CASCADE');
      $table->timestamps();
    });
  }

  /**
   * @return void
   */
  public function down(){
    Schema::dropIfExists('users_subscriptions');
  }
}
