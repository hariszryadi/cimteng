@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Kelurahan {{ $uv->name }}</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Kelurahan Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2 style="text-transform: uppercase;">KELURAHAN {{ $uv->name }}</h2>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/monografi-1.svg') }}" alt="monografi" />
			</div>
			<div class="col-md-6" style="padding-bottom: 18px;">
				<div class="about-intro-text">
                    <p><b>A. BIDANG PEMERINTAHAN</b></p>
                    <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        I. UMUM
                                    </a>
                                </h4>
                            </div>
                           <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p><b><i>1. Luas Dan Batas Wilayah</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Luas Kecamatan</td>
                                            <td>{{ $uv->monograph->large }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Utara</td>
                                            <td>{{ $uv->monograph->north }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Selatan</td>
                                            <td>{{ $uv->monograph->east }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Barat</td>
                                            <td>{{ $uv->monograph->west }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Timur</td>
                                            <td>{{ $uv->monograph->south }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Kondisi Geografis</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Ketinggian Tanah dari Permukaan Laut</td>
                                            <td>{{ $uv->monograph->height }}</td>
                                        </tr>
                                        <tr>
                                            <td>Banyaknya Curah Hujan</td>
                                            <td>{{ $uv->monograph->rainfall }}</td>
                                        </tr>
                                        <tr>
                                            <td>Topografi (dataran tinggi, rendah, pantai)</td>
                                            <td>{{ $uv->monograph->topography }}</td>
                                        </tr>
                                        <tr>
                                            <td>Suhu Udara Rata-rata</td>
                                            <td>{{ $uv->monograph->temperature }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Orbitasi (jarak dari Pusat Pemerintahan)</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Jarak dari Pusat Pemerintahan Kota Cimahi</td>
                                            <td>{{ $uv->monograph->distance_from_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jarak dari Ibu Kota Propinsi</td>
                                            <td>{{ $uv->monograph->distance_from_province }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jarak dari Ibu Kota Negara</td>
                                            <td>{{ $uv->monograph->distance_from_capital }}</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        II. PERTANAHAN
                                    </a>
                                </h4>
                            </div>
                           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Sertifikat Hak Milik</td>
                                            <td>{{ $uv->monograph->shm }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sertifikat Hak Guna Usaha</td>
                                            <td>{{ $uv->monograph->shgu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sertifikat Hak Guna Bangunan</td>
                                            <td>{{ $uv->monograph->shgb }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sertifikat Hak Pakai</td>
                                            <td>{{ $uv->monograph->shp }}</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        III. KEPENDUDUKAN
                                    </a>
                                </h4>
                            </div>
                           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p><b><i>1. Jumlah Penduduk Menurut Kelamin</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Laki-laki</td>
                                            <td>{{ $uv->monograph->male }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Perempuan</td>
                                            <td>{{ $uv->monograph->female }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Kepala Keluarga</td>
                                            <td>{{ $uv->monograph->head_family }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Jumlah Penduduk Menurut Agama/Penghayatan</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Islam</td>
                                            <td>{{ $uv->monograph->islam }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Kristen</td>
                                            <td>{{ $uv->monograph->christian }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Katholik</td>
                                            <td>{{ $uv->monograph->catholic }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Hindu</td>
                                            <td>{{ $uv->monograph->hindu }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Budha</td>
                                            <td>{{ $uv->monograph->buddha }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Penganut Kepercayaan terhadap Tuhan YME</td>
                                            <td>{{ $uv->monograph->other_region }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Jumlah Penduduk Menurut Usia</i></b></p>
                                    <p><b><i>a. Kelompok Pendidikan</i></b></p>
                                    <table>
                                        <tr>
                                            <td>00-03 Tahun</td>
                                            <td>{{ $uv->monograph->edu_00_03 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>04-06 Tahun</td>
                                            <td>{{ $uv->monograph->edu_04_06 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>07-12 Tahun</td>
                                            <td>{{ $uv->monograph->edu_07_12 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>13-15 Tahun</td>
                                            <td>{{ $uv->monograph->edu_13_15 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>16-18 Tahun</td>
                                            <td>{{ $uv->monograph->edu_16_18 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>19 Tahun ke atas</td>
                                            <td>{{ $uv->monograph->edu_19 }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Kelompok Tenaga kerja</i></b></p>
                                    <table>
                                        <tr>
                                            <td>10-14 Tahun</td>
                                            <td>{{ $uv->monograph->em_10_14 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>15-19 Tahun</td>
                                            <td>{{ $uv->monograph->em_15_19 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>20-26 Tahun</td>
                                            <td>{{ $uv->monograph->em_20_26 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>27-40 Tahun</td>
                                            <td>{{ $uv->monograph->em_27_40 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>41-56 Tahun</td>
                                            <td>{{ $uv->monograph->em_41_56 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>57 Tahun ke atas</td>
                                            <td>{{ $uv->monograph->em_57 }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>4. Jumlah Penduduk Menurut Tingkat Kelulusan</i></b></p>
                                    <p><b><i>a. Lulusan Pendidikan Umum</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Taman Kanak-Kanak</td>
                                            <td>{{ $uv->monograph->tk }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Sekolah Dasar</td>
                                            <td>{{ $uv->monograph->sd }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SLTP</td>
                                            <td>{{ $uv->monograph->sltp }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SLTA</td>
                                            <td>{{ $uv->monograph->slta }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Akademi (D1/D2/D3)</td>
                                            <td>{{ $uv->monograph->academy }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Sarjana (S1/S2/S3)</td>
                                            <td>{{ $uv->monograph->bachelor }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>5. Jumlah Penduduk Menurut Mata Pencaharian</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Pegawai Negeri Sipil</td>
                                            <td>{{ $uv->monograph->pns }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>TNI</td>
                                            <td>{{ $uv->monograph->tni }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Polri</td>
                                            <td>{{ $uv->monograph->polri }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Swasta</td>
                                            <td>{{ $uv->monograph->swasta }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Guru/Dosen</td>
                                            <td>{{ $uv->monograph->teacher }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Wiraswasta/Pedagang</td>
                                            <td>{{ $uv->monograph->wiraswasta }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Tani</td>
                                            <td>{{ $uv->monograph->farmer }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Pertukangan</td>
                                            <td>{{ $uv->monograph->craftsman }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Buruh Tani</td>
                                            <td>{{ $uv->monograph->labor_farmer }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Pensiunan</td>
                                            <td>{{ $uv->monograph->retired }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Nelayan</td>
                                            <td>{{ $uv->monograph->fisherman }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Pemulung</td>
                                            <td>{{ $uv->monograph->scavengers }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jasa</td>
                                            <td>{{ $uv->monograph->service }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Lainnya</td>
                                            <td>{{ $uv->monograph->other_profession }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>6. Pembinaan RT / RW</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Jumlah RT</td>
                                            <td>{{ $uv->monograph->rt }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah RW</td>
                                            <td>{{ $uv->monograph->rw }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pengurus RT</td>
                                            <td>{{ $uv->monograph->administrator_rt }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pengurus RW</td>
                                            <td>{{ $uv->monograph->administrator_rw }} Orang</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        IV. KEAMANAN
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Jumlah Anggota LINMAS Laki-laki</td>
                                            <td>{{ $uv->monograph->linmas_male }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Anggota LINMASPerempuan</td>
                                            <td>{{ $uv->monograph->linmas_female }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Linmas Terlatih</td>
                                            <td>{{ $uv->monograph->linmas_trained }} Orang</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->
                     </div>
                     <!-- end of #accordion -->
				</div>
            </div>
		</div>
        <br>
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
				<div class="about-intro-text">
                    <p><b>B. BIDANG PEMBANGUNAN</b></p>
                    <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        I. AGAMA
                                    </a>
                                </h4>
                            </div>
                           <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Jumlah Masjid</td>
                                            <td>{{ $uv->monograph->mosque }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Mushola</td>
                                            <td>{{ $uv->monograph->small_mosque }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Gereja</td>
                                            <td>{{ $uv->monograph->church }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Vihara</td>
                                            <td>{{ $uv->monograph->monastery }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pura</td>
                                            <td>{{ $uv->monograph->temple }}</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        II. PENDIDIKAN
                                    </a>
                                </h4>
                            </div>
                           <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <p><b><i>1. Berdasarkan Gedung</i></b></p>
                                    <p><b><i>a. Gedung Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Kelompok Bermain Negeri</td>
                                            <td>{{ $uv->monograph->b_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung TK Negeri</td>
                                            <td>{{ $uv->monograph->b_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SD Negeri</td>
                                            <td>{{ $uv->monograph->b_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTP Negeri</td>
                                            <td>{{ $uv->monograph->b_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTA Negeri</td>
                                            <td>{{ $uv->monograph->b_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Akademi Negeri</td>
                                            <td>{{ $uv->monograph->b_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Perguruan Tinggi Negeri</td>
                                            <td>{{ $uv->monograph->b_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Gedung Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Kelompok Bermain Swasta</td>
                                            <td>{{ $uv->monograph->b_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung TK Swasta</td>
                                            <td>{{ $uv->monograph->b_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SD Swasta</td>
                                            <td>{{ $uv->monograph->b_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTP Swasta</td>
                                            <td>{{ $uv->monograph->b_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTA Swasta</td>
                                            <td>{{ $uv->monograph->b_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Akademi Swasta</td>
                                            <td>{{ $uv->monograph->b_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Perguruan Tinggi Swasta</td>
                                            <td>{{ $uv->monograph->b_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Gedung Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Pondok Pesantren</td>
                                            <td>{{ $uv->monograph->b_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Madrasah</td>
                                            <td>{{ $uv->monograph->b_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB A</td>
                                            <td>{{ $uv->monograph->b_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB B</td>
                                            <td>{{ $uv->monograph->b_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB C</td>
                                            <td>{{ $uv->monograph->b_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Sarana Pendidikan Non Formal</td>
                                            <td>{{ $uv->monograph->b_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $uv->monograph->b_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Kursus</td>
                                            <td>{{ $uv->monograph->b_course }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Berdasarkan Guru</i></b></p>
                                    <p><b><i>a. Guru Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Kelompok Bermain Negeri</td>
                                            <td>{{ $uv->monograph->t_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru TK Negeri</td>
                                            <td>{{ $uv->monograph->t_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SD Negeri</td>
                                            <td>{{ $uv->monograph->t_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTP Negeri</td>
                                            <td>{{ $uv->monograph->t_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTA Negeri</td>
                                            <td>{{ $uv->monograph->t_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Akademi Negeri</td>
                                            <td>{{ $uv->monograph->t_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Perguruan Tinggi Negeri</td>
                                            <td>{{ $uv->monograph->t_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Guru Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Kelompok Bermain Swasta</td>
                                            <td>{{ $uv->monograph->t_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru TK Swasta</td>
                                            <td>{{ $uv->monograph->t_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SD Swasta</td>
                                            <td>{{ $uv->monograph->t_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTP Swasta</td>
                                            <td>{{ $uv->monograph->t_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTA Swasta</td>
                                            <td>{{ $uv->monograph->t_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Akademi Swasta</td>
                                            <td>{{ $uv->monograph->t_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Perguruan Tinggi Swasta</td>
                                            <td>{{ $uv->monograph->t_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Guru Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Pondok Pesantren</td>
                                            <td>{{ $uv->monograph->t_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Madrasah</td>
                                            <td>{{ $uv->monograph->t_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB A</td>
                                            <td>{{ $uv->monograph->t_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB B</td>
                                            <td>{{ $uv->monograph->t_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB C</td>
                                            <td>{{ $uv->monograph->t_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Sarana Pendidikan Non Formal</td>
                                            <td>{{ $uv->monograph->t_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $uv->monograph->t_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Kursus</td>
                                            <td>{{ $uv->monograph->t_course }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Berdasarkan Murid</i></b></p>
                                    <p><b><i>a. Murid Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Kelompok Bermain Negeri</td>
                                            <td>{{ $uv->monograph->s_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid TK Negeri</td>
                                            <td>{{ $uv->monograph->s_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SD Negeri</td>
                                            <td>{{ $uv->monograph->s_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTP Negeri</td>
                                            <td>{{ $uv->monograph->s_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTA Negeri</td>
                                            <td>{{ $uv->monograph->s_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Akademi Negeri</td>
                                            <td>{{ $uv->monograph->s_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Perguruan Tinggi Negeri</td>
                                            <td>{{ $uv->monograph->s_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Murid Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Kelompok Bermain Swasta</td>
                                            <td>{{ $uv->monograph->s_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid TK Swasta</td>
                                            <td>{{ $uv->monograph->s_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SD Swasta</td>
                                            <td>{{ $uv->monograph->s_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTP Swasta</td>
                                            <td>{{ $uv->monograph->s_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTA Swasta</td>
                                            <td>{{ $uv->monograph->s_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Akademi Swasta</td>
                                            <td>{{ $uv->monograph->s_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Perguruan Tinggi Swasta</td>
                                            <td>{{ $uv->monograph->s_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Murid Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Pondok Pesantren</td>
                                            <td>{{ $uv->monograph->s_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Madrasah</td>
                                            <td>{{ $uv->monograph->s_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB A</td>
                                            <td>{{ $uv->monograph->s_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB B</td>
                                            <td>{{ $uv->monograph->s_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB C</td>
                                            <td>{{ $uv->monograph->s_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Sarana Pendidikan Non Formal</td>
                                            <td>{{ $uv->monograph->s_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $uv->monograph->s_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Kursus</td>
                                            <td>{{ $uv->monograph->s_course }}</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        III. INDUSTRI
                                    </a>
                                </h4>
                            </div>
                           <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Besar</td>
                                            <td>{{ $uv->monograph->big_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sedang</td>
                                            <td>{{ $uv->monograph->medium_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kecil</td>
                                            <td>{{ $uv->monograph->small_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rumah Tangga</td>
                                            <td>{{ $uv->monograph->umkm_industry }}</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        IV. PARIWISATA
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Tempat Rekreasi/Hiburan</td>
                                            <td>{{ $uv->monograph->recreation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel</td>
                                            <td>{{ $uv->monograph->hotel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Motel</td>
                                            <td>{{ $uv->monograph->motel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Losmen</td>
                                            <td>{{ $uv->monograph->losmen }}</td>
                                        </tr>
                                        <tr>
                                            <td>Restoran</td>
                                            <td>{{ $uv->monograph->restaurant }}</td>
                                        </tr>
                                        <tr>
                                            <td>Museum Sejarah</td>
                                            <td>{{ $uv->monograph->museum }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        V. PENGAIRAN
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Saluran Irigasi</td>
                                            <td>{{ $uv->monograph->irrigation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gorong-gorong</td>
                                            <td>{{ $uv->monograph->water_tunnel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pompa Air</td>
                                            <td>{{ $uv->monograph->water_pump }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pembagi Air</td>
                                            <td>{{ $uv->monograph->water_divider }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingTen">
                                <h4 class="panel-title">
                                    <a class="collapsed waves-effect" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        VI. KELEMBAGAAN KECAMATAN
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td>Pengurus LPM</td>
                                            <td>{{ $uv->monograph->lpm }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kader Pembangunan</td>
                                            <td>{{ $uv->monograph->development_cadre }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Tim Penggerak PKK</td>
                                            <td>{{ $uv->monograph->pkk_team }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kader PKK</td>
                                            <td>{{ $uv->monograph->pkk_cadre }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->
                     </div>
                     <!-- end of #accordion -->
				</div>
            </div>
            <div class="col-md-6" style="padding-bottom: 18px;">
				<img class="" src="{{ asset('images/monografi-2.svg') }}" alt="visi & misi" />
			</div>
		</div>
        <br>
        <div class="row">
            <div class="col-md-6" style="padding-bottom: 18px;">
                <img class="" src="{{ asset('images/monografi-3.svg') }}" alt="monografi" />
            </div>
			<div class="col-md-6" style="padding-bottom: 18px;">
				<div class="about-intro-text">
                    <p><b>C. BIDANG KEMASYARAKATAN</b></p>
                    <table>
                        <tr>
                            <td>Majelis Ta'lim</td>
                            <td>{{ $uv->monograph->m_talim }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Gereja</td>
                            <td>{{ $uv->monograph->m_church }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Budha</td>
                            <td>{{ $uv->monograph->m_buddha }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Hindu</td>
                            <td>{{ $uv->monograph->m_hindu }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Masjid</td>
                            <td>{{ $uv->monograph->m_mosque }}</td>
                        </tr>
                    </table>
				</div>
            </div>
		</div>
	</div>
</section>
<!-- Kelurahan End -->
@endsection
