<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkmAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 1. Sangat Baik
         * 2. Baik
         * 3. Cukup Baik
         * 4. Kurang Baik
         */
        Schema::create('skm_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skm_id');
            $table->string('ip');
            $table->string('answer', 1);
            $table->timestamps();

            $table->foreign('skm_id')->references('id')->on('skm')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skm_answers');
    }
}
