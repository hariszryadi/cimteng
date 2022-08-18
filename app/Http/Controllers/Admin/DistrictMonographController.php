<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DistrictMonograph;
use DataTables;

class DistrictMonographController extends Controller
{
    protected $_view = 'backend.district.monograph.';
    protected $_route = 'admin.district.monograph.index';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $monograph = DistrictMonograph::get();
        return view($this->_view.'form')->with(compact('monograph'));
    }

    public function update(Request $request)
    {
        DistrictMonograph::where('id', $request->id)->update([
            // Luas Dan Batas Wilayah
            'large' => $request->large,
            'north' => $request->north,
            'east' => $request->east,
            'west' => $request->west,
            'south' => $request->south,
            // Kondisi Geografis
            'height' => $request->height,
            'rainfall' => $request->rainfall,
            'topography' => $request->topography,
            'temperature' => $request->temperature,
            // Orbitasi (jarak dari Pusat Pemerintahan)
            'distance_from_city' => $request->distance_from_city,
            'distance_from_province' => $request->distance_from_province,
            'distance_from_capital' => $request->distance_from_capital,
            // PERTANAHAN
            'shm' => $request->shm,
            'shgu' => $request->shgu,
            'shgb' => $request->shgb,
            'shp' => $request->shp,
            // Jumlah Penduduk Menurut Kelamin
            'male' => $request->male,
            'female' => $request->female,
            'head_family' => $request->head_family,
            // Jumlah Penduduk Menurut Agama/Penghayatan
            'islam' => $request->islam,
            'christian' => $request->christian,
            'catholic' => $request->catholic,
            'hindu' => $request->hindu,
            'buddha' => $request->buddha,
            'other_region' => $request->other_region,
            // Kelompok Pendidikan
            'edu_00_03' => $request->edu_00_03,
            'edu_04_06' => $request->edu_04_06,
            'edu_07_12' => $request->edu_07_12,
            'edu_13_15' => $request->edu_13_15,
            'edu_16_18' => $request->edu_16_18,
            'edu_19' => $request->edu_19,
            // Kelompok Tenaga kerja
            'em_10_14' => $request->em_10_14,
            'em_15_19' => $request->em_15_19,
            'em_20_26' => $request->em_20_26,
            'em_27_40' => $request->em_27_40,
            'em_41_56' => $request->em_41_56,
            'em_57' => $request->em_57,
            // Lulusan Pendidikan Umum
            'tk' => $request->tk,
            'sd' => $request->sd,
            'sltp' => $request->sltp,
            'slta' => $request->slta,
            'academy' => $request->academy,
            'bachelor' => $request->bachelor,
            // Jumlah Penduduk Menurut Mata Pencaharian
            'pns' => $request->pns,
            'tni' => $request->tni,
            'polri' => $request->polri,
            'swasta' => $request->swasta,
            'teacher' => $request->teacher,
            'wiraswasta' => $request->wiraswasta,
            'farmer' => $request->farmer,
            'craftsman' => $request->craftsman,
            'labor_farmer' => $request->labor_farmer,
            'retired' => $request->retired,
            'fisherman' => $request->fisherman,
            'scavengers' => $request->scavengers,
            'service' => $request->service,
            'other_profession' => $request->other_profession,
            // Pembinaan RT / RW
            'rt' => $request->rt,
            'rw' => $request->rw,
            'administrator_rt' => $request->administrator_rt,
            'administrator_rw' => $request->administrator_rw,
            // KEAMANAN
           'linmas_male' => $request->linmas_male,
           'linmas_female' => $request->linmas_female,
           'linmas_trained' => $request->linmas_trained,
            // AGAMA
           'mosque' => $request->mosque,
           'small_mosque' => $request->small_mosque,
           'church' => $request->church,
           'monastery' => $request->monastery,
           'temple' => $request->temple,
            // Gedung Pendidikan Umum Negeri
           'b_play_group_public' => $request->b_play_group_public,
           'b_tk_public' => $request->b_tk_public,
           'b_sd_public' => $request->b_sd_public,
           'b_sltp_public' => $request->b_sltp_public,
           'b_slta_public' => $request->b_slta_public,
           'b_academy_public' => $request->b_academy_public,
           'b_ptn' => $request->b_ptn,
            // Gedung Pendidikan Umum Swasta
           'b_play_group_private' => $request->b_play_group_private,
           'b_tk_private' => $request->b_tk_private,
           'b_sd_private' => $request->b_sd_private,
           'b_sltp_private' => $request->b_sltp_private,
           'b_slta_private' => $request->b_slta_private,
           'b_academy_private' => $request->b_academy_private,
           'b_pts' => $request->b_pts,
           // Gedung Pendidikan Khusus
           'b_pesantren' => $request->b_pesantren,
           'b_madrasah' => $request->b_madrasah,
           'b_slb_a' => $request->b_slb_a,
           'b_slb_b' => $request->b_slb_b,
           'b_slb_c' => $request->b_slb_c,
           'b_non_formal_edu' => $request->b_non_formal_edu,
           'b_blk' => $request->b_blk,
           'b_course' => $request->b_course,
           // Guru Pendidikan Umum Negeri
           't_play_group_public' => $request->t_play_group_public,
           't_tk_public' => $request->t_tk_public,
           't_sd_public' => $request->t_sd_public,
           't_sltp_public' => $request->t_sltp_public,
           't_slta_public' => $request->t_slta_public,
           't_academy_public' => $request->t_academy_public,
           't_ptn' => $request->t_ptn,
           // Guru Pendidikan Umum Swasta
           't_play_group_private' => $request->t_play_group_private,
           't_tk_private' => $request->t_tk_private,
           't_sd_private' => $request->t_sd_private,
           't_sltp_private' => $request->t_sltp_private,
           't_slta_private' => $request->t_slta_private,
           't_academy_private' => $request->t_academy_private,
           't_pts' => $request->t_pts,
           // Guru Pendidikan Khusus
           't_pesantren' => $request->t_pesantren,
           't_madrasah' => $request->t_madrasah,
           't_slb_a' => $request->t_slb_a,
           't_slb_b' => $request->t_slb_b,
           't_slb_c' => $request->t_slb_c,
           't_non_formal_edu' => $request->t_non_formal_edu,
           't_blk' => $request->t_blk,
           't_course' => $request->t_course,
           // Murid Pendidikan Umum Negeri
           's_play_group_public' => $request->s_play_group_public,
           's_tk_public' => $request->s_tk_public,
           's_sd_public' => $request->s_sd_public,
           's_sltp_public' => $request->s_sltp_public,
           's_slta_public' => $request->s_slta_public,
           's_academy_public' => $request->s_academy_public,
           's_ptn' => $request->s_ptn,
           // Murid Pendidikan Umum Swasta
           's_play_group_private' => $request->s_play_group_private,
           's_tk_private' => $request->s_tk_private,
           's_sd_private' => $request->s_sd_private,
           's_sltp_private' => $request->s_sltp_private,
           's_slta_private' => $request->s_slta_private,
           's_academy_private' => $request->s_academy_private,
           's_pts' => $request->s_pts,
           // Murid Pendidikan Khusus
           's_pesantren' => $request->s_pesantren,
           's_madrasah' => $request->s_madrasah,
           's_slb_a' => $request->s_slb_a,
           's_slb_b' => $request->s_slb_b,
           's_slb_c' => $request->s_slb_c,
           's_non_formal_edu' => $request->s_non_formal_edu,
           's_blk' => $request->s_blk,
           's_course' => $request->s_course,
           // INDUSTRI
           'big_industry' => $request->big_industry,
           'medium_industry' => $request->medium_industry,
           'small_industry' => $request->small_industry,
           'umkm_industry' => $request->umkm_industry,
           // PARIWISATA
           'recreation' => $request->recreation,
           'hotel' => $request->hotel,
           'motel' => $request->motel,
           'losmen' => $request->losmen,
           'restaurant' => $request->restaurant,
           'museum' => $request->museum,
           // PENGAIRAN
           'irrigation' => $request->irrigation,
           'water_tunnel' => $request->water_tunnel,
           'water_pump' => $request->water_pump,
           'water_divider' => $request->water_divider,
           // KELEMBAGAAN KECAMATAN
           'lpm' => $request->lpm,
           'development_cadre' => $request->development_cadre,
           'pkk_team' => $request->pkk_team,
           'pkk_cadre' => $request->pkk_cadre,
           // KEAGAMAAN
           'm_talim' => $request->m_talim,
           'm_church' => $request->m_church,
           'm_buddha' => $request->m_buddha,
           'm_hindu' => $request->m_hindu,
           'm_mosque' => $request->m_mosque
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }
}
