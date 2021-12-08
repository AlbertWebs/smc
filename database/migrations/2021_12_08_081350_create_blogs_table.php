<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->boolean('active')->default(1);
			$table->string('link')->nullable();
			$table->string('slung');
			$table->string('title');
			$table->string('tags')->nullable();
			$table->string('video')->nullable();
			$table->text('meta')->nullable();
			$table->text('content')->nullable();
			$table->string('author')->nullable();
			$table->string('category')->nullable();
			$table->string('image_one')->nullable();
			$table->string('image_two')->nullable();
			$table->string('image_three')->nullable();
			$table->string('image_four')->nullable();
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
		Schema::drop('blogs');
	}

}
