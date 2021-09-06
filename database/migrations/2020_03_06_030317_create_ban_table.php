<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('bans', function (Blueprint $table) {
    		$table->bigIncrements('id');
    		$table->string('fk_name')->unique();
    		$table->boolean('hardban')->default(true);
    		$table->timestamps();

    		$table->foreign('fk_name')->references('name')->on('users')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
