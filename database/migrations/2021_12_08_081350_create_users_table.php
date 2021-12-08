<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('country')->nullable();
			$table->boolean('status')->default(0);
			$table->string('mobile')->nullable();
			$table->string('address')->nullable();
			$table->string('image')->nullable();
			$table->string('email');
			$table->dateTime('email_verified_at')->nullable();
			$table->boolean('is_admin')->nullable();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}