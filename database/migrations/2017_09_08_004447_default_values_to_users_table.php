<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefaultValuesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->string('full_name')->default('')->change();
		    $table->string('description')->default('')->change();
		    $table->string('address')->default('')->change();
		    $table->string('phone')->default('')->change();
			$table->string('cell_phone')->default('')->change();
		    $table->smallInteger('age')->default(0)->change();
		    $table->boolean('gender')->default(true)->change();
		  //  $table->date('birthday');
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
    }
}
