<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('TagTable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('def_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            // $table->foreign('adder_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->datetime('expires_at')->nullable($value = true);

        });
        Schema::table('TagTable', function(Blueprint $table)
        {
            $table->foreign('def_id')->references('id')->on('Defs')->onDelete('cascade');
        });
        Schema::table('TagTable', function(Blueprint $table)
        {
            $table->foreign('tag_id')->references('id')->on('Tags')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TagTable');
    }
}
