<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrbanVillagePotencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urban_village_potency', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urban_village_id');
            $table->string('location')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->unsignedBigInteger('type_potency_id');
            $table->timestamps();

            $table->foreign('urban_village_id')->references('id')->on('urban_villages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('type_potency_id')->references('id')->on('type_potency')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urban_village_potency');
    }
}
