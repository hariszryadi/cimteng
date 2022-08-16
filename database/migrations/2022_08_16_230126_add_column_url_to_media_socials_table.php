<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUrlToMediaSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('media_socials', function (Blueprint $table) {
            $table->string('url_facebook')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_instagram')->nullable();
            $table->string('url_youtube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media_socials', function (Blueprint $table) {
            $table->dropColumn('url_facebook');
            $table->dropColumn('url_twitter');
            $table->dropColumn('url_instagram');
            $table->dropColumn('url_youtube');
        });
    }
}
