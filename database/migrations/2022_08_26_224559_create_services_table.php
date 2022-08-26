<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->timestamps();
        });

        // Insert default data
        DB::table('services')->insert([
            [
                'title' => 'Surat Keterangan Domisili Perusahaan',
                'description' => '<p>Persyaratan</p><ol><li>Formulir dari Kelurahan</li><li>Fc Sertifikat tanah / AJB Perusahan</li><li>Fc IMB</li><li>Fc KTP dan KK</li><li>Persetujuan tetangga (minimal 6, maksimal 10 orang disertai Fc KTP)</li></ol>',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Surat Keterangan Domisili Yayasan',
                'description' => '<p>Persyaratan</p><ol><li>Formulir dari Kelurahan</li><li>Fc Bukti Kepemilikan tempat</li><li>Fc Akte Pendirian Yayasan</li><li>Fotocopy IMB</li><li>Fotocopy KTP dan KK</li></ol>',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Surat Pengantar Pindah Ke Luar Negeri',
                'description' => '<p>Persyaratan</p><ol><li>Formulir dari Kelurahan</li><li>KK dan KTP Asli</li><li>Pas Foto 3x4 (3 lembar)</li></ol>',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Pelayanan Rekomendasi IMB',
                'description' => '<p>Persyaratan</p><ol><li>Formulir Permohonan dari Kelurahan</li><li>Fc. KK  dan KTP</li><li>Fc Sertifikat Tanah/ bukti kepemilikan tanah</li><li>Surat Pemberitahuan/ izin tetangga yang ditanda tangani oleh 10 orang beserta fc KTP</li><li>Denah Lokasi</li></ol>',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Surat Keterangan Tidak Mampu',
                'description' => '<p>Persyaratan</p><ol><li>Surat Pengantar Dari Kelurahan</li><li>Foto Copy KK</li><li>Foto Copy E - KTP</li></ol>',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
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
        Schema::dropIfExists('services');
    }
}
