<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('to_id')->unsigned();
	    $table->integer('from_id')->unsigned();
	    $table->string('title');
            $table->timestamps();
        });

        Schema::table('conversations', function (Blueprint $table) {
	    $table->foreign('to_id')->references('id')->on('users');
	    $table->foreign('from_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}
