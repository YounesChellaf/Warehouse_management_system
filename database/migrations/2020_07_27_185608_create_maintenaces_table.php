<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenaces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resident_id')->unsigned()->nullable();
			$table->string('resident_name', 200)->nullable();
            $table->bigInteger('resident_contact')->nullable();
            $table->string('resident_block', 200)->nullable();
            $table->integer('resident_room')->nullable();
            $table->integer('worker_id')->unsigned()->nullable();
            $table->string('worker_name', 200)->nullable();
			$table->bigInteger('worker_contact')->nullable();
            $table->string('description', 500)->nullable();
            $table->string('category',200)->nullable();
            $table->string('progress',200)->nullable();
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
        Schema::dropIfExists('maintenaces');
    }
}
