<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fkads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hastable('ads'))
  	    Schema::create('ads', function(Blueprint $table){
      		$table->string('fk_name', 30);
      		$table->foreign('fk_name')->references('name')->on('users')->onDelete('cascade');

  	    	$table->string('uri', 255);
      		$table->string('url', 255);

      		$table->date('updated_at');
  	    	$table->date('created_at');
  	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
