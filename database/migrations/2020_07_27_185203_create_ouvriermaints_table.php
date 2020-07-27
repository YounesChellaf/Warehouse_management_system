<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOuvriermaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvriermaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('worker_name', 200);
            $table->string('worker_id', 200)->nullable();
            $table->string('worker_spec')->nullable();
			$table->bigInteger('worker_contact')->nullable();
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
        Schema::dropIfExists('ouvriermaints');
    }
}
