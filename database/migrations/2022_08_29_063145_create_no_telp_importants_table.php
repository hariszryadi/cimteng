<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoTelpImportantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_telp_importants', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->string('no_telp');
            $table->timestamps();
        });

        // Insert default data
        DB::table('no_telp_importants')->insert([
            [
                'agency' => 'RS Dustira',
                'no_telp' => '(022) 663 3967'
            ],
            [
                'agency' => 'RSUD Cibabat',
                'no_telp' => '(022) 665 2025'
            ],
            [
                'agency' => 'RS Mitrakasih Cibabat',
                'no_telp' => '(022) 665 2409'
            ],
            [
                'agency' => 'RSU Kasih Bunda',
                'no_telp' => '(022) 661 4221'
            ],
            [
                'agency' => 'Call Center PLN',
                'no_telp' => '123'
            ],
            [
                'agency' => 'Polres Cimahi',
                'no_telp' => '(022) 665 2095'
            ],
            [
                'agency' => 'SMS Polres Kota Cimahi',
                'no_telp' => '0856 2432 3888'
            ],
            [
                'agency' => 'Call Center Telkom',
                'no_telp' => '147'
            ],
            [
                'agency' => 'Pengaduan Gangguan Telpon',
                'no_telp' => '117'
            ],
            [
                'agency' => 'Layanan Informasi Jasa Pos',
                'no_telp' => '161'
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
        Schema::dropIfExists('no_telp_importants');
    }
}
