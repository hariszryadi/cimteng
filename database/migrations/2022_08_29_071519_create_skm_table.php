<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skm', function (Blueprint $table) {
            $table->id();
            $table->string('question');
        });

        // Insert default data
        DB::table('skm')->insert([
            [
                'question' => 'Bagaimana pendapat Saudara tentang kemudahan prosedur pelayanan di unit ini ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kejelasan dan kepastian petugas yang melayani ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam memberikan pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang tanggung jawab petugas dalam memberikan pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kecepatan pelayanan di unit ini ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang keadilan untuk mendapatkan pelayanan di unit ini ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang kenyamanan dilingkungan unit pelayanan ?'
            ],
            [
                'question' => 'Bagaimana pendapat Saudara tentang keamanan pelayanan di unit ini ?'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skm');
    }
}
