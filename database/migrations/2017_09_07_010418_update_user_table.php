<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->string('full_name');
		    $table->string('description');
		    $table->string('address');
		    $table->string('phone');
		    $table->smallInteger('age');
		    $table->boolean('gender');
		    $table->date('birthday');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->dropColumn('full_name');
		    $table->dropColumn('description');
		    $table->dropColumn('address');
		    $table->dropColumn('phone');
		    $table->dropColumn('age');
		    $table->dropColumn('gender');
		    $table->dropColumn('birthday');
	    });
    }
}
