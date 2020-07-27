<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residants', function (Blueprint $table) {
            $table->increments('id');
			$table->string('resident_name', 200)->nullable();
            $table->string('resident_block', 200)->nullable();
            $table->integer('resident_room')->nullable();
			$table->bigInteger('resident_contact')->nullable();
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
        Schema::dropIfExists('residants');
    }
}
