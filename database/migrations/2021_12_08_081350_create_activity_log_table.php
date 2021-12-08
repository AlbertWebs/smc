<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_log', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('log_name')->nullable()->index();
			$table->text('description');
			$table->string('subject_type')->nullable();
			$table->bigInteger('subject_id')->unsigned()->nullable();
			$table->string('causer_type')->nullable();
			$table->bigInteger('causer_id')->unsigned()->nullable();
			$table->text('properties')->nullable();
			$table->timestamps(10);
			$table->index(['causer_type','causer_id'], 'causer');
			$table->index(['subject_type','subject_id'], 'subject');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_log');
	}

}
