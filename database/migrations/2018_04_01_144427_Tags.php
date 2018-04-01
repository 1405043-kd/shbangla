<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Tags', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('name');
           // $table->string('provider');
            $table->timestamps();
            $table->datetime('expires_at')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tags');
    }
}
