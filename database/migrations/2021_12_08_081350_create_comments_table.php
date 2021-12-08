<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('post_id');
			$table->integer('parent_id')->unsigned()->default(0);
			$table->text('comment')->nullable();
			$table->integer('commentable_id')->unsigned();
			$table->string('commentable_type');
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
		Schema::drop('comments');
	}

}
