<?php

use Illuminate\Database\Migrations\Migration;

class UpdatingCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('cars', function($table)
		{
		    $table->integer('user_id');
		    $table->string('foto_url');
		    $table->string('year');
		    $table->string('color');
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