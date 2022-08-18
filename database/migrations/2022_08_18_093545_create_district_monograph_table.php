<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictMonographTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_monograph', function (Blueprint $table) {
            $table->id();
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
            $table->string('shm')->nullable();
            $table->string('shgu')->nullable();
            $table->string('shgb')->nullable();
            $table->string('shp')->nullable();
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
        });

        // Insert default data
        DB::table('district_monograph')->insert([
            // Luas Dan Batas Wilayah
            'large' => '1011.43 Ha',
            'north' => 'Kec. Cimahi Utara',
            'east' => 'Kec. Cimahi Selatan',
            'west' => 'Kec. Ngamprah',
            'south' => 'Kec. Cimahi Selatan',
            // Kondisi Geografis
            'height' => '± 700 m',
            'rainfall' => '2.450 mm/tahun',
            'topography' => 'Dataran tinggi',
            'temperature' => '27° C',
            // Orbitasi (jarak dari Pusat Pemerintahan)
            'distance_from_city' => '0.2 Km',
            'distance_from_province' => '13 Km',
            'distance_from_capital' => '232 Km',
            // PERTANAHAN
            'shm' => '2435 Ha',
            'shgu' => '109 Ha',
            'shgb' => '57.3 Ha',
            'shp' => '266.5 Ha',
            // Jumlah Penduduk Menurut Kelamin
            'male' => 82326,
            'female' => 81000,
            'head_family' => 48399,
            // Jumlah Penduduk Menurut Agama/Penghayatan
            'islam' => 153327,
            'christian' => 5397,
            'catholic' => 2667,
            'hindu' => 282,
            'buddha' => 324,
            'other_region' => 18,
            // Kelompok Pendidikan
            'edu_00_03' => 8454,
            'edu_04_06' => 8170,
            'edu_07_12' => 14373,
            'edu_13_15' => 8933,
            'edu_16_18' => 8545,
            'edu_19' => 96163,
            // Kelompok Tenaga kerja
            'em_10_14' => 11315,
            'em_15_19' => 8135,
            'em_20_26' => 13020,
            'em_27_40' => 17977,
            'em_41_56' => 14282,
            'em_57' => 6280,
            // Lulusan Pendidikan Umum
            'tk' => 14516,
            'sd' => 18845,
            'sltp' => 28820,
            'slta' => 46267,
            'academy' => 7738,
            'bachelor' => 5887,
            // Jumlah Penduduk Menurut Mata Pencaharian
            'pns' => 4180,
            'tni' => 3244,
            'polri' => 459,
            'swasta' => 26745,
            'teacher' => 977,
            'wiraswasta' => 12248,
            'farmer' => 201,
            'craftsman' => 857,
            'labor_farmer' => 674,
            'retired' => 3558,
            'fisherman' => 13,
            'scavengers' => 63,
            'service' => 1107,
            'other_profession' => 39612,
            // Pembinaan RT / RW
            'rt' => 571,
            'rw' => 110,
            'administrator_rt' => 1870,
            'administrator_rw' => 459,
            // KEAMANAN
            'linmas_male' => 621,
            'linmas_female' => 0,
            'linmas_trained' => 487,
            // AGAMA
            'mosque' => 189,
            'small_mosque' => 160,
            'church' => 17,
            'monastery' => 0,
            'temple' => 1,
            // Gedung Pendidikan Umum Negeri
            'b_play_group_public' => 16,
            'b_tk_public' => 10,
            'b_sd_public' => 48,
            'b_sltp_public' => 6,
            'b_slta_public' => 8,
            'b_academy_public' => 0,
            'b_ptn' => 0,
            // Gedung Pendidikan Umum Swasta
            'b_play_group_private' => 41,
            'b_tk_private' => 38,
            'b_sd_private' => 8,
            'b_sltp_private' => 13,
            'b_slta_private' => 9,
            'b_academy_private' => 2, 
            'b_pts' => 1,
            // Gedung Pendidikan Khusus
            'b_pesantren' => 5,
            'b_madrasah' => 13,
            'b_slb_a' => 0,
            'b_slb_b' => 1,
            'b_slb_c' => 2,
            'b_non_formal_edu' => 0,
            'b_blk' => 0,
            'b_course' => 2, 
            // Guru Pendidikan Umum Negeri
            't_play_group_public' => 21,
            't_tk_public' => 39,
            't_sd_public' => 543,
            't_sltp_public' => 276,
            't_slta_public' => 274,
            't_academy_public' => 0,
            't_ptn' => 0,
            // Guru Pendidikan Umum Swasta
            't_play_group_private' => 183,
            't_tk_private' => 164,
            't_sd_private' => 202,
            't_sltp_private' => 226,
            't_slta_private' => 338,
            't_academy_private' => 50,
            't_pts' => 24,
            // Guru Pendidikan Khusus
            't_pesantren' => 51,
            't_madrasah' => 37,
            't_slb_a' => 0,
            't_slb_b' => 0,
            't_slb_c' => 46,
            't_non_formal_edu' => 0,
            't_blk' => 0,
            't_course' => 0, 
            // Murid Pendidikan Umum Negeri
            's_play_group_public' => 135,
            's_tk_public' => 447,
            's_sd_public' => 10442,
            's_sltp_public' => 5862,
            's_slta_public' => 0,
            's_academy_public' => 0, 
            's_ptn' => 0,
            // Murid Pendidikan Umum Swasta
            's_play_group_private' => 1635,
            's_tk_private' => 1359,
            's_sd_private' => 3702,
            's_sltp_private' => 3978,
            's_slta_private' => 5876,
            's_academy_private' => 389,
            's_pts' => 187,
            // Murid Pendidikan Khusus
            's_pesantren' => 545,
            's_madrasah' => 380,
            's_slb_a' => 0,
            's_slb_b' => 0,
            's_slb_c' => 138,
            's_non_formal_edu' => 0,
            's_blk' => 0,
            's_course' => 0,
            // INDUSTRI
            'big_industry' => 49,
            'medium_industry' => 33,
            'small_industry' => 61,
            'umkm_industry' => 386,
            // PARIWISATA
            'recreation' => 1,
            'hotel' => 3,
            'motel' => 0,
            'losmen' => 1,
            'restaurant' => 21,
            'museum' => 0,
            // PENGAIRAN
            'irrigation' => 20,
            'water_tunnel' => 88,
            'water_pump' => 1938,
            'water_divider' => 0,
            // KELEMBAGAAN KECAMATAN
            'lpm' => 107,
            'development_cadre' => 297,
            'pkk_team' => 110,
            'pkk_cadre' => 1938,
            // KEAGAMAAN
            'm_talim' => 355,
            'm_church' => 17,
            'm_buddha' => 0,
            'm_hindu' => 1,
            'm_mosque' => 127,
            
            'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district_monograph');
    }
}
