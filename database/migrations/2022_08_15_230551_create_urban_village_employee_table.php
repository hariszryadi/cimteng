<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrbanVillageEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urban_village_employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urban_village_id');
            $table->string('avatar')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('rank')->nullable();
            $table->string('education')->nullable();
            $table->timestamps();

            $table->foreign('urban_village_id')->references('id')->on('urban_villages')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urban_village_employee');
    }
}
