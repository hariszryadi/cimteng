@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Monografi Kecamatan</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Monografi Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>MONOGRAFI KECAMATAN</h2>
					<p>Data Monografi Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
				<img class="img-center" src="{{ asset('images/monografi-1.svg') }}" alt="Bidang Pemerintahan" />
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
                                            <td>{{ $monograph[0]->large }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Utara</td>
                                            <td>{{ $monograph[0]->north }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Selatan</td>
                                            <td>{{ $monograph[0]->east }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Barat</td>
                                            <td>{{ $monograph[0]->west }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sebelah Timur</td>
                                            <td>{{ $monograph[0]->south }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Kondisi Geografis</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Ketinggian Tanah dari Permukaan Laut</td>
                                            <td>{{ $monograph[0]->height }}</td>
                                        </tr>
                                        <tr>
                                            <td>Banyaknya Curah Hujan</td>
                                            <td>{{ $monograph[0]->rainfall }}</td>
                                        </tr>
                                        <tr>
                                            <td>Topografi (dataran tinggi, rendah, pantai)</td>
                                            <td>{{ $monograph[0]->topography }}</td>
                                        </tr>
                                        <tr>
                                            <td>Suhu Udara Rata-rata</td>
                                            <td>{{ $monograph[0]->temperature }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Orbitasi (jarak dari Pusat Pemerintahan)</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Jarak dari Pusat Pemerintahan Kota Cimahi</td>
                                            <td>{{ $monograph[0]->distance_from_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jarak dari Ibu Kota Propinsi</td>
                                            <td>{{ $monograph[0]->distance_from_province }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jarak dari Ibu Kota Negara</td>
                                            <td>{{ $monograph[0]->distance_from_capital }}</td>
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
                                            <td>{{ $monograph[0]->shm }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sertifikat Hak Guna Usaha</td>
                                            <td>{{ $monograph[0]->shgu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sertifikat Hak Guna Bangunan</td>
                                            <td>{{ $monograph[0]->shgb }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sertifikat Hak Pakai</td>
                                            <td>{{ $monograph[0]->shp }}</td>
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
                                            <td>{{ $monograph[0]->male }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Perempuan</td>
                                            <td>{{ $monograph[0]->female }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Kepala Keluarga</td>
                                            <td>{{ $monograph[0]->head_family }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Jumlah Penduduk Menurut Agama/Penghayatan</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Islam</td>
                                            <td>{{ $monograph[0]->islam }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Kristen</td>
                                            <td>{{ $monograph[0]->christian }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Katholik</td>
                                            <td>{{ $monograph[0]->catholic }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Hindu</td>
                                            <td>{{ $monograph[0]->hindu }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Budha</td>
                                            <td>{{ $monograph[0]->buddha }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Penganut Kepercayaan terhadap Tuhan YME</td>
                                            <td>{{ $monograph[0]->other_region }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Jumlah Penduduk Menurut Usia</i></b></p>
                                    <p><b><i>a. Kelompok Pendidikan</i></b></p>
                                    <table>
                                        <tr>
                                            <td>00-03 Tahun</td>
                                            <td>{{ $monograph[0]->edu_00_03 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>04-06 Tahun</td>
                                            <td>{{ $monograph[0]->edu_04_06 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>07-12 Tahun</td>
                                            <td>{{ $monograph[0]->edu_07_12 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>13-15 Tahun</td>
                                            <td>{{ $monograph[0]->edu_13_15 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>16-18 Tahun</td>
                                            <td>{{ $monograph[0]->edu_16_18 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>19 Tahun ke atas</td>
                                            <td>{{ $monograph[0]->edu_19 }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Kelompok Tenaga kerja</i></b></p>
                                    <table>
                                        <tr>
                                            <td>10-14 Tahun</td>
                                            <td>{{ $monograph[0]->em_10_14 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>15-19 Tahun</td>
                                            <td>{{ $monograph[0]->em_15_19 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>20-26 Tahun</td>
                                            <td>{{ $monograph[0]->em_20_26 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>27-40 Tahun</td>
                                            <td>{{ $monograph[0]->em_27_40 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>41-56 Tahun</td>
                                            <td>{{ $monograph[0]->em_41_56 }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>57 Tahun ke atas</td>
                                            <td>{{ $monograph[0]->em_57 }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>4. Jumlah Penduduk Menurut Tingkat Kelulusan</i></b></p>
                                    <p><b><i>a. Lulusan Pendidikan Umum</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Taman Kanak-Kanak</td>
                                            <td>{{ $monograph[0]->tk }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Sekolah Dasar</td>
                                            <td>{{ $monograph[0]->sd }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SLTP</td>
                                            <td>{{ $monograph[0]->sltp }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SLTA</td>
                                            <td>{{ $monograph[0]->slta }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Akademi (D1/D2/D3)</td>
                                            <td>{{ $monograph[0]->academy }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Sarjana (S1/S2/S3)</td>
                                            <td>{{ $monograph[0]->bachelor }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>5. Jumlah Penduduk Menurut Mata Pencaharian</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Pegawai Negeri Sipil</td>
                                            <td>{{ $monograph[0]->pns }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>TNI</td>
                                            <td>{{ $monograph[0]->tni }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Polri</td>
                                            <td>{{ $monograph[0]->polri }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Swasta</td>
                                            <td>{{ $monograph[0]->swasta }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Guru/Dosen</td>
                                            <td>{{ $monograph[0]->teacher }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Wiraswasta/Pedagang</td>
                                            <td>{{ $monograph[0]->wiraswasta }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Tani</td>
                                            <td>{{ $monograph[0]->farmer }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Pertukangan</td>
                                            <td>{{ $monograph[0]->craftsman }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Buruh Tani</td>
                                            <td>{{ $monograph[0]->labor_farmer }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Pensiunan</td>
                                            <td>{{ $monograph[0]->retired }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Nelayan</td>
                                            <td>{{ $monograph[0]->fisherman }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Pemulung</td>
                                            <td>{{ $monograph[0]->scavengers }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jasa</td>
                                            <td>{{ $monograph[0]->service }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Lainnya</td>
                                            <td>{{ $monograph[0]->other_profession }} Orang</td>
                                        </tr>
                                    </table>
                                    <p><b><i>6. Pembinaan RT / RW</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Jumlah RT</td>
                                            <td>{{ $monograph[0]->rt }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah RW</td>
                                            <td>{{ $monograph[0]->rw }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pengurus RT</td>
                                            <td>{{ $monograph[0]->administrator_rt }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pengurus RW</td>
                                            <td>{{ $monograph[0]->administrator_rw }} Orang</td>
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
                                            <td>{{ $monograph[0]->linmas_male }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Anggota LINMASPerempuan</td>
                                            <td>{{ $monograph[0]->linmas_female }} Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Linmas Terlatih</td>
                                            <td>{{ $monograph[0]->linmas_trained }} Orang</td>
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
			<div class="col-md-6 desktop" style="padding-bottom: 18px;">
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
                                            <td>{{ $monograph[0]->mosque }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Mushola</td>
                                            <td>{{ $monograph[0]->small_mosque }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Gereja</td>
                                            <td>{{ $monograph[0]->church }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Vihara</td>
                                            <td>{{ $monograph[0]->monastery }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pura</td>
                                            <td>{{ $monograph[0]->temple }}</td>
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
                                            <td>{{ $monograph[0]->b_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung TK Negeri</td>
                                            <td>{{ $monograph[0]->b_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SD Negeri</td>
                                            <td>{{ $monograph[0]->b_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTP Negeri</td>
                                            <td>{{ $monograph[0]->b_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTA Negeri</td>
                                            <td>{{ $monograph[0]->b_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Akademi Negeri</td>
                                            <td>{{ $monograph[0]->b_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Perguruan Tinggi Negeri</td>
                                            <td>{{ $monograph[0]->b_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Gedung Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Kelompok Bermain Swasta</td>
                                            <td>{{ $monograph[0]->b_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung TK Swasta</td>
                                            <td>{{ $monograph[0]->b_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SD Swasta</td>
                                            <td>{{ $monograph[0]->b_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTP Swasta</td>
                                            <td>{{ $monograph[0]->b_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTA Swasta</td>
                                            <td>{{ $monograph[0]->b_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Akademi Swasta</td>
                                            <td>{{ $monograph[0]->b_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Perguruan Tinggi Swasta</td>
                                            <td>{{ $monograph[0]->b_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Gedung Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Pondok Pesantren</td>
                                            <td>{{ $monograph[0]->b_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Madrasah</td>
                                            <td>{{ $monograph[0]->b_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB A</td>
                                            <td>{{ $monograph[0]->b_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB B</td>
                                            <td>{{ $monograph[0]->b_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB C</td>
                                            <td>{{ $monograph[0]->b_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Sarana Pendidikan Non Formal</td>
                                            <td>{{ $monograph[0]->b_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $monograph[0]->b_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Kursus</td>
                                            <td>{{ $monograph[0]->b_course }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Berdasarkan Guru</i></b></p>
                                    <p><b><i>a. Guru Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Kelompok Bermain Negeri</td>
                                            <td>{{ $monograph[0]->t_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru TK Negeri</td>
                                            <td>{{ $monograph[0]->t_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SD Negeri</td>
                                            <td>{{ $monograph[0]->t_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTP Negeri</td>
                                            <td>{{ $monograph[0]->t_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTA Negeri</td>
                                            <td>{{ $monograph[0]->t_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Akademi Negeri</td>
                                            <td>{{ $monograph[0]->t_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Perguruan Tinggi Negeri</td>
                                            <td>{{ $monograph[0]->t_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Guru Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Kelompok Bermain Swasta</td>
                                            <td>{{ $monograph[0]->t_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru TK Swasta</td>
                                            <td>{{ $monograph[0]->t_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SD Swasta</td>
                                            <td>{{ $monograph[0]->t_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTP Swasta</td>
                                            <td>{{ $monograph[0]->t_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTA Swasta</td>
                                            <td>{{ $monograph[0]->t_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Akademi Swasta</td>
                                            <td>{{ $monograph[0]->t_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Perguruan Tinggi Swasta</td>
                                            <td>{{ $monograph[0]->t_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Guru Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Pondok Pesantren</td>
                                            <td>{{ $monograph[0]->t_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Madrasah</td>
                                            <td>{{ $monograph[0]->t_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB A</td>
                                            <td>{{ $monograph[0]->t_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB B</td>
                                            <td>{{ $monograph[0]->t_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB C</td>
                                            <td>{{ $monograph[0]->t_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Sarana Pendidikan Non Formal</td>
                                            <td>{{ $monograph[0]->t_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $monograph[0]->t_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Kursus</td>
                                            <td>{{ $monograph[0]->t_course }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Berdasarkan Murid</i></b></p>
                                    <p><b><i>a. Murid Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Kelompok Bermain Negeri</td>
                                            <td>{{ $monograph[0]->s_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid TK Negeri</td>
                                            <td>{{ $monograph[0]->s_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SD Negeri</td>
                                            <td>{{ $monograph[0]->s_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTP Negeri</td>
                                            <td>{{ $monograph[0]->s_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTA Negeri</td>
                                            <td>{{ $monograph[0]->s_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Akademi Negeri</td>
                                            <td>{{ $monograph[0]->s_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Perguruan Tinggi Negeri</td>
                                            <td>{{ $monograph[0]->s_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Murid Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Kelompok Bermain Swasta</td>
                                            <td>{{ $monograph[0]->s_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid TK Swasta</td>
                                            <td>{{ $monograph[0]->s_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SD Swasta</td>
                                            <td>{{ $monograph[0]->s_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTP Swasta</td>
                                            <td>{{ $monograph[0]->s_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTA Swasta</td>
                                            <td>{{ $monograph[0]->s_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Akademi Swasta</td>
                                            <td>{{ $monograph[0]->s_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Perguruan Tinggi Swasta</td>
                                            <td>{{ $monograph[0]->s_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Murid Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Pondok Pesantren</td>
                                            <td>{{ $monograph[0]->s_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Madrasah</td>
                                            <td>{{ $monograph[0]->s_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB A</td>
                                            <td>{{ $monograph[0]->s_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB B</td>
                                            <td>{{ $monograph[0]->s_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB C</td>
                                            <td>{{ $monograph[0]->s_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Sarana Pendidikan Non Formal</td>
                                            <td>{{ $monograph[0]->s_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $monograph[0]->s_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Kursus</td>
                                            <td>{{ $monograph[0]->s_course }}</td>
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
                                            <td>{{ $monograph[0]->big_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sedang</td>
                                            <td>{{ $monograph[0]->medium_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kecil</td>
                                            <td>{{ $monograph[0]->small_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rumah Tangga</td>
                                            <td>{{ $monograph[0]->umkm_industry }}</td>
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
                                            <td>{{ $monograph[0]->recreation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel</td>
                                            <td>{{ $monograph[0]->hotel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Motel</td>
                                            <td>{{ $monograph[0]->motel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Losmen</td>
                                            <td>{{ $monograph[0]->losmen }}</td>
                                        </tr>
                                        <tr>
                                            <td>Restoran</td>
                                            <td>{{ $monograph[0]->restaurant }}</td>
                                        </tr>
                                        <tr>
                                            <td>Museum Sejarah</td>
                                            <td>{{ $monograph[0]->museum }}</td>
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
                                            <td>{{ $monograph[0]->irrigation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gorong-gorong</td>
                                            <td>{{ $monograph[0]->water_tunnel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pompa Air</td>
                                            <td>{{ $monograph[0]->water_pump }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pembagi Air</td>
                                            <td>{{ $monograph[0]->water_divider }}</td>
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
                                            <td>{{ $monograph[0]->lpm }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kader Pembangunan</td>
                                            <td>{{ $monograph[0]->development_cadre }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Tim Penggerak PKK</td>
                                            <td>{{ $monograph[0]->pkk_team }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kader PKK</td>
                                            <td>{{ $monograph[0]->pkk_cadre }}</td>
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
            <div class="col-md-6 desktop" style="padding-bottom: 18px;">
				<img class="img-center" src="{{ asset('images/monografi-2.svg') }}" alt="Bidang Pembangunan" />
			</div>
            <div class="col-md-6 mobile" style="padding-bottom: 18px; display: none;">
				<img class="" src="{{ asset('images/monografi-2.svg') }}" alt="Bidang Pembangunan" />
			</div>
            <div class="col-md-6 mobile" style="padding-bottom: 18px; display: none;">
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
                                            <td>{{ $monograph[0]->mosque }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Mushola</td>
                                            <td>{{ $monograph[0]->small_mosque }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Gereja</td>
                                            <td>{{ $monograph[0]->church }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Vihara</td>
                                            <td>{{ $monograph[0]->monastery }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Pura</td>
                                            <td>{{ $monograph[0]->temple }}</td>
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
                                            <td>{{ $monograph[0]->b_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung TK Negeri</td>
                                            <td>{{ $monograph[0]->b_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SD Negeri</td>
                                            <td>{{ $monograph[0]->b_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTP Negeri</td>
                                            <td>{{ $monograph[0]->b_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTA Negeri</td>
                                            <td>{{ $monograph[0]->b_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Akademi Negeri</td>
                                            <td>{{ $monograph[0]->b_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Perguruan Tinggi Negeri</td>
                                            <td>{{ $monograph[0]->b_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Gedung Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Kelompok Bermain Swasta</td>
                                            <td>{{ $monograph[0]->b_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung TK Swasta</td>
                                            <td>{{ $monograph[0]->b_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SD Swasta</td>
                                            <td>{{ $monograph[0]->b_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTP Swasta</td>
                                            <td>{{ $monograph[0]->b_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLTA Swasta</td>
                                            <td>{{ $monograph[0]->b_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Akademi Swasta</td>
                                            <td>{{ $monograph[0]->b_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Perguruan Tinggi Swasta</td>
                                            <td>{{ $monograph[0]->b_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Gedung Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Gedung Pondok Pesantren</td>
                                            <td>{{ $monograph[0]->b_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Madrasah</td>
                                            <td>{{ $monograph[0]->b_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB A</td>
                                            <td>{{ $monograph[0]->b_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB B</td>
                                            <td>{{ $monograph[0]->b_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung SLB C</td>
                                            <td>{{ $monograph[0]->b_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Sarana Pendidikan Non Formal</td>
                                            <td>{{ $monograph[0]->b_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $monograph[0]->b_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Kursus</td>
                                            <td>{{ $monograph[0]->b_course }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>2. Berdasarkan Guru</i></b></p>
                                    <p><b><i>a. Guru Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Kelompok Bermain Negeri</td>
                                            <td>{{ $monograph[0]->t_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru TK Negeri</td>
                                            <td>{{ $monograph[0]->t_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SD Negeri</td>
                                            <td>{{ $monograph[0]->t_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTP Negeri</td>
                                            <td>{{ $monograph[0]->t_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTA Negeri</td>
                                            <td>{{ $monograph[0]->t_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Akademi Negeri</td>
                                            <td>{{ $monograph[0]->t_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Perguruan Tinggi Negeri</td>
                                            <td>{{ $monograph[0]->t_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Guru Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Kelompok Bermain Swasta</td>
                                            <td>{{ $monograph[0]->t_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru TK Swasta</td>
                                            <td>{{ $monograph[0]->t_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SD Swasta</td>
                                            <td>{{ $monograph[0]->t_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTP Swasta</td>
                                            <td>{{ $monograph[0]->t_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLTA Swasta</td>
                                            <td>{{ $monograph[0]->t_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Akademi Swasta</td>
                                            <td>{{ $monograph[0]->t_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen Perguruan Tinggi Swasta</td>
                                            <td>{{ $monograph[0]->t_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Guru Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Guru Pondok Pesantren</td>
                                            <td>{{ $monograph[0]->t_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Madrasah</td>
                                            <td>{{ $monograph[0]->t_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB A</td>
                                            <td>{{ $monograph[0]->t_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB B</td>
                                            <td>{{ $monograph[0]->t_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru SLB C</td>
                                            <td>{{ $monograph[0]->t_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Sarana Pendidikan Non Formal</td>
                                            <td>{{ $monograph[0]->t_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $monograph[0]->t_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guru Kursus</td>
                                            <td>{{ $monograph[0]->t_course }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>3. Berdasarkan Murid</i></b></p>
                                    <p><b><i>a. Murid Pendidikan Umum Negeri</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Kelompok Bermain Negeri</td>
                                            <td>{{ $monograph[0]->s_play_group_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid TK Negeri</td>
                                            <td>{{ $monograph[0]->s_tk_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SD Negeri</td>
                                            <td>{{ $monograph[0]->s_sd_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTP Negeri</td>
                                            <td>{{ $monograph[0]->s_sltp_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTA Negeri</td>
                                            <td>{{ $monograph[0]->s_slta_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Akademi Negeri</td>
                                            <td>{{ $monograph[0]->s_academy_public }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Perguruan Tinggi Negeri</td>
                                            <td>{{ $monograph[0]->s_ptn }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>b. Murid Pendidikan Umum Swasta</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Kelompok Bermain Swasta</td>
                                            <td>{{ $monograph[0]->s_play_group_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid TK Swasta</td>
                                            <td>{{ $monograph[0]->s_tk_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SD Swasta</td>
                                            <td>{{ $monograph[0]->s_sd_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTP Swasta</td>
                                            <td>{{ $monograph[0]->s_sltp_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLTA Swasta</td>
                                            <td>{{ $monograph[0]->s_slta_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Akademi Swasta</td>
                                            <td>{{ $monograph[0]->s_academy_private }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mahasiswa Perguruan Tinggi Swasta</td>
                                            <td>{{ $monograph[0]->s_pts }}</td>
                                        </tr>
                                    </table>
                                    <p><b><i>c. Murid Pendidikan Khusus</i></b></p>
                                    <table>
                                        <tr>
                                            <td>Murid Pondok Pesantren</td>
                                            <td>{{ $monograph[0]->s_pesantren }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Madrasah</td>
                                            <td>{{ $monograph[0]->s_madrasah }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB A</td>
                                            <td>{{ $monograph[0]->s_slb_a }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB B</td>
                                            <td>{{ $monograph[0]->s_slb_b }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid SLB C</td>
                                            <td>{{ $monograph[0]->s_slb_c }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Sarana Pendidikan Non Formal</td>
                                            <td>{{ $monograph[0]->s_non_formal_edu }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid BLK (Balai Latihan Kerja)</td>
                                            <td>{{ $monograph[0]->s_blk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Murid Kursus</td>
                                            <td>{{ $monograph[0]->s_course }}</td>
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
                                            <td>{{ $monograph[0]->big_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sedang</td>
                                            <td>{{ $monograph[0]->medium_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kecil</td>
                                            <td>{{ $monograph[0]->small_industry }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rumah Tangga</td>
                                            <td>{{ $monograph[0]->umkm_industry }}</td>
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
                                            <td>{{ $monograph[0]->recreation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel</td>
                                            <td>{{ $monograph[0]->hotel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Motel</td>
                                            <td>{{ $monograph[0]->motel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Losmen</td>
                                            <td>{{ $monograph[0]->losmen }}</td>
                                        </tr>
                                        <tr>
                                            <td>Restoran</td>
                                            <td>{{ $monograph[0]->restaurant }}</td>
                                        </tr>
                                        <tr>
                                            <td>Museum Sejarah</td>
                                            <td>{{ $monograph[0]->museum }}</td>
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
                                            <td>{{ $monograph[0]->irrigation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gorong-gorong</td>
                                            <td>{{ $monograph[0]->water_tunnel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pompa Air</td>
                                            <td>{{ $monograph[0]->water_pump }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pembagi Air</td>
                                            <td>{{ $monograph[0]->water_divider }}</td>
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
                                            <td>{{ $monograph[0]->lpm }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kader Pembangunan</td>
                                            <td>{{ $monograph[0]->development_cadre }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Tim Penggerak PKK</td>
                                            <td>{{ $monograph[0]->pkk_team }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kader PKK</td>
                                            <td>{{ $monograph[0]->pkk_cadre }}</td>
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
                <img class="img-center" src="{{ asset('images/monografi-3.svg') }}" alt="Bidang Kemasyarakatan" />
            </div>
			<div class="col-md-6" style="padding-bottom: 18px;">
				<div class="about-intro-text">
                    <p><b>C. BIDANG KEMASYARAKATAN</b></p>
                    <table>
                        <tr>
                            <td>Majelis Ta'lim</td>
                            <td>{{ $monograph[0]->m_talim }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Gereja</td>
                            <td>{{ $monograph[0]->m_church }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Budha</td>
                            <td>{{ $monograph[0]->m_buddha }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Hindu</td>
                            <td>{{ $monograph[0]->m_hindu }}</td>
                        </tr>
                        <tr>
                            <td>Majelis Masjid</td>
                            <td>{{ $monograph[0]->m_mosque }}</td>
                        </tr>
                    </table>
				</div>
            </div>
		</div>
	</div>
</section>
<!-- Monografi End -->
@endsection

@section('scripts')
<script>
    if ($(window).width() <= 600) {
        $(".mobile").show();
        $(".desktop").hide();
    } else {
        $(".mobile").hide();
        $(".desktop").show();
    }
</script>
@endsection
