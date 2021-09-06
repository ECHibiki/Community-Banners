<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datetodatetime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ads', function (Blueprint $table){
          $table->dateTime('updated_at', 0)->change();
          $table->dateTime('created_at', 0)->change();
        });
        Schema::table('antispam', function (Blueprint $table){
          $table->dateTime('updated_at', 0)->change();
          $table->dateTime('created_at', 0)->change();
        });
        Schema::table('bans', function (Blueprint $table){
          $table->dateTime('updated_at', 0)->change();
          $table->dateTime('created_at', 0)->change();
        });
        Schema::table('mods', function (Blueprint $table){
          $table->dateTime('updated_at', 0)->change();
          $table->dateTime('created_at', 0)->change();
        });
        Schema::table('users', function (Blueprint $table){
          $table->dateTime('updated_at', 0)->change();
          $table->dateTime('created_at', 0)->change();
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
