<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Antonym extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('Antonym', function (Blueprint $table) {
    $table->increments('id');
    $table->String('antname');
    $table->integer('word_id')->unsigned();
    // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
    $table->timestamps();
    $table->datetime('expires_at')->nullable($value = true);

});
Schema::table('Antonym', function(Blueprint $table)
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
        Schema::dropIfExists('Antonym');
    }
}
