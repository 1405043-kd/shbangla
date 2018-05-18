<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Synonym extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Synonym', function (Blueprint $table) {
            $table->increments('id');
            $table->String('synoname');
            $table->integer('word_id')->unsigned();
            // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->datetime('expires_at')->nullable($value = true);

        });
        Schema::table('Synonym', function(Blueprint $table)
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
        //
        Schema::dropIfExists('Synonym');
    }
}
