<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_socials', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
        });

        // Insert default data
        DB::table('media_socials')->insert(
            array(
                'email' => 'cimahitengah@gmail.com',
                'facebook' => 'Kec. Cimahi Tengah',
                'twitter' => 'cimahitengah',
                'instagram' => 'cimahitengah',
                'youtube' => 'Kec. Cimahi Tengah',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_socials');
    }
}
