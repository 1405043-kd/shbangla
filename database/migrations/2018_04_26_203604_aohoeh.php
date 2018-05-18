<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aohoeh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aohoeh', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ant');
            $table->integer('wordid')->unsigned();
            // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->datetime('expires_at')->nullable($value = true);

        });
        Schema::table('aohoeh', function(Blueprint $table)
        {
            $table->foreign('wordid')->references('id')->on('Words')->onDelete('cascade');
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
        Schema::dropIfExists('aohoeh');
    }
}
