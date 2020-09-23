<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration{
  /**
   * @return void
   */
  public function up(){
    Schema::create('sponsors', function(Blueprint $table){
      $table->id();
      $table->string("name");
      $table->text("link");
      $table->tinyInteger("type")->default(1);
      $table->boolean("required")->default(FALSE);
      $table->timestamps();
    });
  }

  /**
   * @return void
   */
  public function down(){
    Schema::dropIfExists('sponsors');
  }
}
