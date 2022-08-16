<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrbanVillageMonographTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urban_village_monograph', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urban_village_id');
            // Luas Dan Batas Wilayah
            $table->string('large')->nullable();
            $table->string('north')->nullable();
            $table->string('east')->nullable();
            $table->string('west')->nullable();
            $table->string('south')->nullable();
            // Kondisi Geografis
            $table->string('height')->nullable();
            $table->string('rainfall')->nullable();
            $table->string('topography')->nullable();
            $table->string('temperature')->nullable();
            // Orbitasi (jarak dari Pusat Pemerintahan)
            $table->string('distance_from_city')->nullable();
            $table->string('distance_from_province')->nullable();
            $table->string('distance_from_capital')->nullable();
            // PERTANAHAN
            $table->integer('shm')->nullable();
            $table->integer('shgu')->nullable();
            $table->integer('shgb')->nullable();
            $table->integer('shp')->nullable();
            // Jumlah Penduduk Menurut Kelamin
            $table->integer('male')->nullable();
            $table->integer('female')->nullable();
            $table->integer('head_family')->nullable();
            // Jumlah Penduduk Menurut Agama/Penghayatan
            $table->integer('islam')->nullable();
            $table->integer('christian')->nullable();
            $table->integer('catholic')->nullable();
            $table->integer('hindu')->nullable();
            $table->integer('buddha')->nullable();
            $table->integer('other_region')->nullable();
            // Kelompok Pendidikan
            $table->integer('edu_00_03')->nullable();
            $table->integer('edu_04_06')->nullable();
            $table->integer('edu_07_12')->nullable();
            $table->integer('edu_13_15')->nullable();
            $table->integer('edu_16_18')->nullable();
            $table->integer('edu_19')->nullable();
            // Kelompok Tenaga kerja
            $table->integer('em_10_14')->nullable();
            $table->integer('em_15_19')->nullable();
            $table->integer('em_20_26')->nullable();
            $table->integer('em_27_40')->nullable();
            $table->integer('em_41_56')->nullable();
            $table->integer('em_57')->nullable();
            // Lulusan Pendidikan Umum
            $table->integer('tk')->nullable();
            $table->integer('sd')->nullable();
            $table->integer('sltp')->nullable();
            $table->integer('slta')->nullable();
            $table->integer('academy')->nullable();
            $table->integer('bachelor')->nullable();
            // Jumlah Penduduk Menurut Mata Pencaharian
            $table->integer('pns')->nullable();
            $table->integer('tni')->nullable();
            $table->integer('polri')->nullable();
            $table->integer('swasta')->nullable();
            $table->integer('teacher')->nullable();
            $table->integer('wiraswasta')->nullable();
            $table->integer('farmer')->nullable();
            $table->integer('craftsman')->nullable();
            $table->integer('labor_farmer')->nullable();
            $table->integer('retired')->nullable();
            $table->integer('fisherman')->nullable();
            $table->integer('scavengers')->nullable();
            $table->integer('service')->nullable();
            $table->integer('other_profession')->nullable();
            // Pembinaan RT / RW
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->integer('administrator_rt')->nullable();
            $table->integer('administrator_rw')->nullable();
            // KEAMANAN
            $table->integer('linmas_male')->nullable();
            $table->integer('linmas_female')->nullable();
            $table->integer('linmas_trained')->nullable();
            // AGAMA
            $table->integer('mosque')->nullable();
            $table->integer('small_mosque')->nullable();
            $table->integer('church')->nullable();
            $table->integer('monastery')->nullable();
            $table->integer('temple')->nullable();
            // Gedung Pendidikan Umum Negeri
            $table->integer('b_play_group_public')->nullable();
            $table->integer('b_tk_public')->nullable();
            $table->integer('b_sd_public')->nullable();
            $table->integer('b_sltp_public')->nullable();
            $table->integer('b_slta_public')->nullable();
            $table->integer('b_academy_public')->nullable();
            $table->integer('b_ptn')->nullable();
            // Gedung Pendidikan Umum Swasta
            $table->integer('b_play_group_private')->nullable();
            $table->integer('b_tk_private')->nullable();
            $table->integer('b_sd_private')->nullable();
            $table->integer('b_sltp_private')->nullable();
            $table->integer('b_slta_private')->nullable();
            $table->integer('b_academy_private')->nullable();
            $table->integer('b_pts')->nullable();
            // Gedung Pendidikan Khusus
            $table->integer('b_pesantren')->nullable();
            $table->integer('b_madrasah')->nullable();
            $table->integer('b_slb_a')->nullable();
            $table->integer('b_slb_b')->nullable();
            $table->integer('b_slb_c')->nullable();
            $table->integer('b_non_formal_edu')->nullable();
            $table->integer('b_blk')->nullable();
            $table->integer('b_course')->nullable();
            // Guru Pendidikan Umum Negeri
            $table->integer('t_play_group_public')->nullable();
            $table->integer('t_tk_public')->nullable();
            $table->integer('t_sd_public')->nullable();
            $table->integer('t_sltp_public')->nullable();
            $table->integer('t_slta_public')->nullable();
            $table->integer('t_academy_public')->nullable();
            $table->integer('t_ptn')->nullable();
            // Guru Pendidikan Umum Swasta
            $table->integer('t_play_group_private')->nullable();
            $table->integer('t_tk_private')->nullable();
            $table->integer('t_sd_private')->nullable();
            $table->integer('t_sltp_private')->nullable();
            $table->integer('t_slta_private')->nullable();
            $table->integer('t_academy_private')->nullable();
            $table->integer('t_pts')->nullable();
            // Guru Pendidikan Khusus
            $table->integer('t_pesantren')->nullable();
            $table->integer('t_madrasah')->nullable();
            $table->integer('t_slb_a')->nullable();
            $table->integer('t_slb_b')->nullable();
            $table->integer('t_slb_c')->nullable();
            $table->integer('t_non_formal_edu')->nullable();
            $table->integer('t_blk')->nullable();
            $table->integer('t_course')->nullable();
            // Murid Pendidikan Umum Negeri
            $table->integer('s_play_group_public')->nullable();
            $table->integer('s_tk_public')->nullable();
            $table->integer('s_sd_public')->nullable();
            $table->integer('s_sltp_public')->nullable();
            $table->integer('s_slta_public')->nullable();
            $table->integer('s_academy_public')->nullable();
            $table->integer('s_ptn')->nullable();
            // Murid Pendidikan Umum Swasta
            $table->integer('s_play_group_private')->nullable();
            $table->integer('s_tk_private')->nullable();
            $table->integer('s_sd_private')->nullable();
            $table->integer('s_sltp_private')->nullable();
            $table->integer('s_slta_private')->nullable();
            $table->integer('s_academy_private')->nullable();
            $table->integer('s_pts')->nullable();
            // Murid Pendidikan Khusus
            $table->integer('s_pesantren')->nullable();
            $table->integer('s_madrasah')->nullable();
            $table->integer('s_slb_a')->nullable();
            $table->integer('s_slb_b')->nullable();
            $table->integer('s_slb_c')->nullable();
            $table->integer('s_non_formal_edu')->nullable();
            $table->integer('s_blk')->nullable();
            $table->integer('s_course')->nullable();
            // INDUSTRI
            $table->integer('big_industry')->nullable();
            $table->integer('medium_industry')->nullable();
            $table->integer('small_industry')->nullable();
            $table->integer('umkm_industry')->nullable();
            // PARIWISATA
            $table->integer('recreation')->nullable();
            $table->integer('hotel')->nullable();
            $table->integer('motel')->nullable();
            $table->integer('losmen')->nullable();
            $table->integer('restaurant')->nullable();
            $table->integer('museum')->nullable();
            // PENGAIRAN
            $table->integer('irrigation')->nullable();
            $table->integer('water_tunnel')->nullable();
            $table->integer('water_pump')->nullable();
            $table->integer('water_divider')->nullable();
            // KELEMBAGAAN KECAMATAN
            $table->integer('lpm')->nullable();
            $table->integer('development_cadre')->nullable();
            $table->integer('pkk_team')->nullable();
            $table->integer('pkk_cadre')->nullable();
            // KEAGAMAAN
            $table->integer('m_talim')->nullable();
            $table->integer('m_church')->nullable();
            $table->integer('m_buddha')->nullable();
            $table->integer('m_hindu')->nullable();
            $table->integer('m_mosque')->nullable();
            $table->timestamps();

            $table->foreign('urban_village_id')->references('id')->on('urban_villages')->onUpdate('cascade')->onDelete('cascade');
        });

        // Insert default data
        DB::table('urban_village_monograph')->insert([
            [
                'urban_village_id' => 1,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'urban_village_id' => 2,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'urban_village_id' => 3,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'urban_village_id' => 4,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'urban_village_id' => 5,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'urban_village_id' => 6,
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
        Schema::dropIfExists('urban_village_monograph');
    }
}
