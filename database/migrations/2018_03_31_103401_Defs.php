<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Defs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Defs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adder_id')->unsigned();
            $table->integer('word_id')->unsigned();

           // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('def');
            $table->string('sentence_ex')->nullable();
            $table->integer('like_count')->unsigned();
            $table->integer('dislike_count')->unsigned();
            //$table->string('add_date');
            $table->timestamps();
        });
        Schema::table('Defs', function(Blueprint $table)
        {
            $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('Defs', function(Blueprint $table)
        {
            $table->foreign('word_id')->references('id')->on('Words')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Defs');
    }
}
