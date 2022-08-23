<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIumkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iumk', function (Blueprint $table) {
            $table->id();
            $table->string('no_iumk');
            $table->string('name_company');
            $table->string('location_company');
            $table->string('merchandise');
            $table->unsignedBigInteger('urban_village_id');
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
        Schema::dropIfExists('iumk');
    }
}
