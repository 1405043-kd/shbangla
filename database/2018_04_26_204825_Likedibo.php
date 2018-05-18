<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Likedibo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Likedibo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('liker')->unsigned();
            $table->integer('word_id')->unsigned();
            $table->integer('def_id')->unsigned();
            // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->datetime('expires_at')->nullable($value = true);

        });
        Schema::table('Likedibo', function(Blueprint $table)
        {
            $table->foreign('liker')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('Likedibo', function(Blueprint $table)
        {
            $table->foreign('word_id')->references('id')->on('words')->onDelete('cascade');
        });
        Schema::table('Likedibo', function(Blueprint $table)
        {
            $table->foreign('def_id')->references('id')->on('defs')->onDelete('cascade');
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
        Schema::dropIfExists('Likedibo');
    }
}
