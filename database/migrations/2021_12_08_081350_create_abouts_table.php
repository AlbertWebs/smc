<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abouts', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->primary();
			$table->text('content')->nullable();
			$table->text('company')->nullable();
			$table->text('mission')->nullable();
			$table->text('vision')->nullable();
			$table->text('values')->nullable();
			$table->text('image_one')->nullable();
			$table->text('image_two')->nullable();
			$table->text('image_three')->nullable();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('abouts');
	}

}
