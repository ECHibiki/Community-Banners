<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeAdUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('users'))
        Schema::create('users', function (Blueprint $table) {
  	        $table->bigIncrements('id');
            $table->string('name',30)->unique();
      	    $table->string('pass',100);
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
    }
}
