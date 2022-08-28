<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailGalleryPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_gallery_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_photo_id');
            $table->string('photo');
            $table->timestamps();

            $table->foreign('gallery_photo_id')->references('id')->on('gallery_photos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_gallery_photos');
    }
}
