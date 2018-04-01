<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Words extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Words', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adder_id')->unsigned();
           // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
          //  $table->string('add_date');
            $table->timestamps();
            $table->datetime('expires_at')->nullable($value = true);
        });
        Schema::table('Words', function(Blueprint $table)
        {
            $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('Words');
    }
}
