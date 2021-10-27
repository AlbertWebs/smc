<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191)->nullable();
            $table->string('Consultant')->nullable();
            $table->string('service');
            $table->text('scope')->nullable();
            $table->text('Project_contractor')->nullable();
            $table->text('Product_specification')->nullable();
            $table->text('Site_services')->nullable();
            $table->text('Application')->nullable();
            $table->string('slung', 191)->nullable();
            $table->string('meta', 191)->nullable();
            $table->string('file_one')->nullable();
            $table->string('file_two')->nullable();
            $table->string('file_three')->nullable();
            $table->string('file_four')->nullable();
            $table->string('file_five')->nullable();
            $table->text('content')->nullable();
            $table->string('Status')->default('Completed');
            $table->string('client', 191)->nullable();
            $table->string('location', 191)->nullable();
            $table->string('video')->nullable();
            $table->tinyInteger('show')->default(0);
            $table->string('type', 191)->nullable();
            $table->string('size', 191)->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('image_one', 191)->nullable();
            $table->string('image_two', 191)->nullable();
            $table->string('image_three', 191)->nullable();
            $table->string('image_four', 191)->nullable();
            $table->string('image_five')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
