@extends('layouts.backend.master')

@section('title-header')
    Monografi
@endsection

@section('menus')
    Kecamatan
@endsection

@section('submenus')
    Monografi
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Form Monografi Kecamatan</h5>
        </div>
        <div class="panel-body">
            
            @if ($monograph[0]->updated_at != null)
                <div class="alert alert-success mb-2 alert-dismissible" role="alert">
                    @php
                        $date = $monograph[0]->updated_at;
                        $date->settings(['formatFunction' => 'translatedFormat']);
                    @endphp
                    <strong>Terakhir diupdate : {{ $date->format('l, j F Y H:i:s') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>
            @endif

            <form class="form-horizontal" id="form" action="{{ route('admin.district.monograph.update') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" id="hidden_id" name="id" value="{{ $monograph[0]->id }}">
                </div>

                <h6><strong>A. BIDANG PEMERINTAHAN</strong></h6>
                <p><strong>I. UMUM</strong></p>

                <p><b><i>1. Luas dan Batas Wilayah</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Luas Kelurahan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="large" id="large" placeholder="contoh: 225 Ha" value="{{ $monograph[0]->large }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Sebelah Utara</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="north" id="north" placeholder="contoh: Kel. Karangmekar" value="{{ $monograph[0]->north }}">
                    </div>
                    <label class="control-label col-lg-2">Sebelah Selatan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="east" id="east" placeholder="contoh: Kel. Cimahi Selatan" value="{{ $monograph[0]->east }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Sebelah Barat</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="west" id="west" placeholder="contoh: Kel. Setiamanah" value="{{ $monograph[0]->west }}">
                    </div>
                    <label class="control-label col-lg-2">Sebelah Timur</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="south" id="south" placeholder="contoh: Kel. Cigugur Tengah" value="{{ $monograph[0]->south }}">
                    </div>
                </div>

                <br>

                <p><b><i>2. Kondisi Geografis</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Ketinggian Tanah dari Permukaan Laut</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="height" id="height" placeholder="contoh: 700 m" value="{{ $monograph[0]->height }}">
                    </div>
                    <label class="control-label col-lg-2">Banyaknya Curah Hujan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="rainfall" id="rainfall" placeholder="contoh: 24" value="{{ $monograph[0]->rainfall }}" min="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Topografi (Dataran Tinggi, Rendah, Pantai)</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="topography" id="topography" placeholder="contoh: Dataran rendah" value="{{ $monograph[0]->topography }}">
                    </div>
                    <label class="control-label col-lg-2">Suhu Udara Rata-rata</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="temperature" id="temperature" placeholder="contoh: 25 °C" value="{{ $monograph[0]->temperature }}">
                    </div>
                </div>
                
                <br>

                <p><b><i>3. Obitasi (Jarak dari Pusat Pemerintahan)</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Jarak dari Pusat Pemerintahan Kota Cimahi</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="distance_from_city" id="distance_from_city" placeholder="contoh: 1 Km" value="{{ $monograph[0]->distance_from_city }}">
                    </div>
                    <label class="control-label col-lg-2">Jarak dari Ibu Kota Provinsi</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="distance_from_province" id="distance_from_province" placeholder="contoh: 20 Km" value="{{ $monograph[0]->distance_from_province }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jarak dari Ibu Kota Negara</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="distance_from_capital" id="distance_from_capital" placeholder="contoh: 100 Km" value="{{ $monograph[0]->distance_from_capital }}">
                    </div>
                </div>

                <br>

                <p><strong>II. PERTANAHAN</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Sertifikat Hak Milik</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="shm" id="shm" placeholder="contoh: 10" value="{{ $monograph[0]->shm }}">
                    </div>
                    <label class="control-label col-lg-2">Sertifikat Hak Guna Usaha</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="shgu" id="shgu" placeholder="contoh: 10" value="{{ $monograph[0]->shgu }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Sertifikat Hak Guna Bangunan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="shgb" id="shgb" placeholder="contoh: 10" value="{{ $monograph[0]->shgb }}">
                    </div>
                    <label class="control-label col-lg-2">Sertifikat Hak Pakai</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="shp" id="shp" placeholder="contoh: 10" value="{{ $monograph[0]->shp }}">
                    </div>
                </div>
                
                <br>

                <p><strong>III. KEPENDUDUKAN</strong></p>

                <p><b><i>1. Jumlah Penduduk Menurut Kelamin</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Laki-laki</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="male" id="male" placeholder="contoh: 10000" value="{{ $monograph[0]->male }}">
                    </div>
                    <label class="control-label col-lg-2">Perempuan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="female" id="female" placeholder="contoh: 10000" value="{{ $monograph[0]->female }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Kepala Keluarga</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="head_family" id="head_family" placeholder="contoh: 5000" value="{{ $monograph[0]->head_family }}">
                    </div>
                </div>

                <br>

                <p><b><i>2. Jumlah Penduduk Menurut Agama/Penghayatan</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Islam</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="islam" id="islam" placeholder="contoh: 10000" value="{{ $monograph[0]->islam }}">
                    </div>
                    <label class="control-label col-lg-2">Kristen</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="christian" id="christian" placeholder="contoh: 1000" value="{{ $monograph[0]->christian }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Katholik</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="catholic" id="catholic" placeholder="contoh: 1000" value="{{ $monograph[0]->catholic }}">
                    </div>
                    <label class="control-label col-lg-2">Hindu</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="hindu" id="hindu" placeholder="contoh: 1000" value="{{ $monograph[0]->hindu }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Budha</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="buddha" id="buddha" placeholder="contoh: 1000" value="{{ $monograph[0]->buddha }}">
                    </div>
                    <label class="control-label col-lg-2">Penganut Kepercayaan terhadap Tuhan YME</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="other_region" id="other_region" placeholder="contoh: 0" value="{{ $monograph[0]->other_region }}">
                    </div>
                </div>

                <br>

                <p><b><i>3. Jumlah Penduduk Menurut Usia</i></b></p>
                <p><i>a. Kelompok Pendidikan</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">00-03 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edu_00_03" id="edu_00_03" placeholder="contoh: 1000" value="{{ $monograph[0]->edu_00_03 }}">
                    </div>
                    <label class="control-label col-lg-2">04-06 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edu_04_06" id="edu_04_06" placeholder="contoh: 1000" value="{{ $monograph[0]->edu_04_06 }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">07-12 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edu_07_12" id="edu_07_12" placeholder="contoh: 1000" value="{{ $monograph[0]->edu_07_12 }}">
                    </div>
                    <label class="control-label col-lg-2">13-15 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edu_13_15" id="edu_13_15" placeholder="contoh: 1000" value="{{ $monograph[0]->edu_13_15 }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">16-18 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edu_16_18" id="edu_16_18" placeholder="contoh: 1000" value="{{ $monograph[0]->edu_16_18 }}">
                    </div>
                    <label class="control-label col-lg-2">19 Tahun ke atas</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edu_19" id="edu_19" placeholder="contoh: 1000" value="{{ $monograph[0]->edu_19 }}">
                    </div>
                </div>

                <p><i>b. Kelompok Tenaga kerja</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">10-14 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="em_10_14" id="em_10_14" placeholder="contoh: 1000" value="{{ $monograph[0]->em_10_14 }}">
                    </div>
                    <label class="control-label col-lg-2">15-19 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="em_15_19" id="em_15_19" placeholder="contoh: 1000" value="{{ $monograph[0]->em_15_19 }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">20-26 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="em_20_26" id="em_20_26" placeholder="contoh: 1000" value="{{ $monograph[0]->em_20_26 }}">
                    </div>
                    <label class="control-label col-lg-2">27-40 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="em_27_40" id="em_27_40" placeholder="contoh: 1000" value="{{ $monograph[0]->em_27_40 }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">41-56 Tahun</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="em_41_56" id="em_41_56" placeholder="contoh: 1000" value="{{ $monograph[0]->em_41_56 }}">
                    </div>
                    <label class="control-label col-lg-2">57 Tahun ke atas</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="em_57" id="em_57" placeholder="contoh: 1000" value="{{ $monograph[0]->em_57 }}">
                    </div>
                </div>

                <br>

                <p><b><i>4. Jumlah Penduduk Menurut Tingkat Kelulusan</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Taman Kanak-Kanak</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="tk" id="tk" placeholder="contoh: 1000" value="{{ $monograph[0]->tk }}">
                    </div>
                    <label class="control-label col-lg-2">Sekolah Dasar</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="sd" id="sd" placeholder="contoh: 1000" value="{{ $monograph[0]->sd }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">SLTP</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="sltp" id="sltp" placeholder="contoh: 1000" value="{{ $monograph[0]->sltp }}">
                    </div>
                    <label class="control-label col-lg-2">SLTA</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="slta" id="slta" placeholder="contoh: 1000" value="{{ $monograph[0]->slta }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Akademi (D1/D2/D3)</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="academy" id="academy" placeholder="contoh: 1000" value="{{ $monograph[0]->academy }}">
                    </div>
                    <label class="control-label col-lg-2">Sarjana (S1/S2/S3)</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="bachelor" id="bachelor" placeholder="contoh: 1000" value="{{ $monograph[0]->bachelor }}">
                    </div>
                </div>

                <br>

                <p><b><i>5. Jumlah Penduduk Menurut Mata Pencaharian</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Pegawai Negeri Sipil</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="pns" id="pns" placeholder="contoh: 1000" value="{{ $monograph[0]->pns }}">
                    </div>
                    <label class="control-label col-lg-2">TNI</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="tni" id="tni" placeholder="contoh: 1000" value="{{ $monograph[0]->tni }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Polri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="polri" id="polri" placeholder="contoh: 1000" value="{{ $monograph[0]->polri }}">
                    </div>
                    <label class="control-label col-lg-2">Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="swasta" id="swasta" placeholder="contoh: 1000" value="{{ $monograph[0]->swasta }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru/Dosen</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="teacher" id="teacher" placeholder="contoh: 1000" value="{{ $monograph[0]->teacher }}">
                    </div>
                    <label class="control-label col-lg-2">Wiraswasta/Pedagang</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="wiraswasta" id="wiraswasta" placeholder="contoh: 1000" value="{{ $monograph[0]->wiraswasta }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Tani</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="farmer" id="farmer" placeholder="contoh: 1000" value="{{ $monograph[0]->farmer }}">
                    </div>
                    <label class="control-label col-lg-2">Pertukangan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="craftsman" id="craftsman" placeholder="contoh: 1000" value="{{ $monograph[0]->craftsman }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Buruh Tani</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="labor_farmer" id="labor_farmer" placeholder="contoh: 1000" value="{{ $monograph[0]->labor_farmer }}">
                    </div>
                    <label class="control-label col-lg-2">Pensiunan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="retired" id="retired" placeholder="contoh: 1000" value="{{ $monograph[0]->retired }}">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-lg-2">Nelayan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="fisherman" id="fisherman" placeholder="contoh: 1000" value="{{ $monograph[0]->fisherman }}">
                    </div>
                    <label class="control-label col-lg-2">Pemulung</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="scavengers" id="scavengers" placeholder="contoh: 1000" value="{{ $monograph[0]->scavengers }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Jasa</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="service" id="service" placeholder="contoh: 1000" value="{{ $monograph[0]->service }}">
                    </div>
                    <label class="control-label col-lg-2">Lainnya</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="other_profession" id="other_profession" placeholder="contoh: 1000" value="{{ $monograph[0]->other_profession }}">
                    </div>
                </div>

                <br>

                <p><b><i>6. Pembinaan RT / RW</i></b></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah RT</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="rt" id="rt" placeholder="contoh: 100" value="{{ $monograph[0]->rt }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah RW</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="rw" id="rw" placeholder="contoh: 100" value="{{ $monograph[0]->rw }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Pengurus RT</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="administrator_rt" id="administrator_rt" placeholder="contoh: 100" value="{{ $monograph[0]->administrator_rt }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah Pengurus RW</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="administrator_rw" id="administrator_rw" placeholder="contoh: 100" value="{{ $monograph[0]->administrator_rw }}">
                    </div>
                </div>

                <br>

                <p><strong>IV. KEAMANAN</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Anggota LINMAS Laki-laki</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="linmas_male" id="linmas_male" placeholder="contoh: 50" value="{{ $monograph[0]->linmas_male }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah Anggota LINMAS Perempuan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="linmas_female" id="linmas_female" placeholder="contoh: 50" value="{{ $monograph[0]->linmas_female }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Linmas Terlatih</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="linmas_trained" id="linmas_trained" placeholder="contoh: 50" value="{{ $monograph[0]->linmas_trained }}">
                    </div>
                </div>

                <hr>

                <h6><strong>B. BIDANG PEMBANGUNAN</strong></h6>
                <p><strong>I. AGAMA</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Masjid</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="mosque" id="mosque" placeholder="contoh: 10" value="{{ $monograph[0]->mosque }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah Mushola</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="small_mosque" id="small_mosque" placeholder="contoh: 10" value="{{ $monograph[0]->small_mosque }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Gereja</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="church" id="church" placeholder="contoh: 5" value="{{ $monograph[0]->church }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah Vihara</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="monastery" id="monastery" placeholder="contoh: 1" value="{{ $monograph[0]->monastery }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Pura</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="temple" id="temple" placeholder="contoh: 1" value="{{ $monograph[0]->temple }}">
                    </div>
                </div>

                <br>

                <p><strong>II. PENDIDIKAN</strong></p>

                <p><b><i>1. Berdasarkan Gedung</i></b></p>
                <p><i>a. Gedung Pendidikan Umum Negeri</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung Kelompok Bermain Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_play_group_public" id="b_play_group_public" placeholder="contoh: 10" value="{{ $monograph[0]->b_play_group_public }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung TK Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_tk_public" id="b_tk_public" placeholder="contoh: 10" value="{{ $monograph[0]->b_tk_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung SD Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_sd_public" id="b_sd_public" placeholder="contoh: 10" value="{{ $monograph[0]->b_sd_public }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung SLTP Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_sltp_public" id="b_sltp_public" placeholder="contoh: 10" value="{{ $monograph[0]->b_sltp_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung SLTA Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_slta_public" id="b_slta_public" placeholder="contoh: 10" value="{{ $monograph[0]->b_slta_public }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung Akademi Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_academy_public" id="b_academy_public" placeholder="contoh: 10" value="{{ $monograph[0]->b_academy_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung Perguruan Tinggi Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_ptn" id="b_ptn" placeholder="contoh: 10" value="{{ $monograph[0]->b_ptn }}">
                    </div>
                </div>

                <p><i>b. Gedung Pendidikan Umum Swasta</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung Kelompok Bermain Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_play_group_private" id="b_play_group_private" placeholder="contoh: 10" value="{{ $monograph[0]->b_play_group_private }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung TK Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_tk_private" id="b_tk_private" placeholder="contoh: 10" value="{{ $monograph[0]->b_tk_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung SD Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_sd_private" id="b_sd_private" placeholder="contoh: 10" value="{{ $monograph[0]->b_sd_private }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung SLTP Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_sltp_private" id="b_sltp_private" placeholder="contoh: 10" value="{{ $monograph[0]->b_sltp_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung SLTA Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_slta_private" id="b_slta_private" placeholder="contoh: 10" value="{{ $monograph[0]->b_slta_private }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung Akademi Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_academy_private" id="b_academy_private" placeholder="contoh: 10" value="{{ $monograph[0]->b_academy_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung Perguruan Tinggi Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_pts" id="b_pts" placeholder="contoh: 10" value="{{ $monograph[0]->b_pts }}">
                    </div>
                </div>

                <p><i>c. Gedung Pendidikan Umum Khusus</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung Pondok Pesantren</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_pesantren" id="b_pesantren" placeholder="contoh: 10" value="{{ $monograph[0]->b_pesantren }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung Madrasah</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_madrasah" id="b_madrasah" placeholder="contoh: 10" value="{{ $monograph[0]->b_madrasah }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung SLB A</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_slb_a" id="b_slb_a" placeholder="contoh: 10" value="{{ $monograph[0]->b_slb_a }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung SLB B</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_slb_b" id="b_slb_b" placeholder="contoh: 10" value="{{ $monograph[0]->b_slb_b }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung SLB C</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_slb_c" id="b_slb_c" placeholder="contoh: 10" value="{{ $monograph[0]->b_slb_c }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung Sarana Pendidikan Non Formal</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_non_formal_edu" id="b_non_formal_edu" placeholder="contoh: 10" value="{{ $monograph[0]->b_non_formal_edu }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Gedung BLK (Balai Latihan Kerja)</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_blk" id="b_blk" placeholder="contoh: 10" value="{{ $monograph[0]->b_blk }}">
                    </div>
                    <label class="control-label col-lg-2">Gedung Kursus</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="b_course" id="b_course" placeholder="contoh: 10" value="{{ $monograph[0]->b_course }}">
                    </div>
                </div>

                <br>

                <p><b><i>2. Berdasarkan Guru</i></b></p>
                <p><i>a. Guru Pendidikan Umum Negeri</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Guru Kelompok Bermain Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_play_group_public" id="t_play_group_public" placeholder="contoh: 10" value="{{ $monograph[0]->t_play_group_public }}">
                    </div>
                    <label class="control-label col-lg-2">Guru TK Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_tk_public" id="t_tk_public" placeholder="contoh: 10" value="{{ $monograph[0]->t_tk_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru SD Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_sd_public" id="t_sd_public" placeholder="contoh: 10" value="{{ $monograph[0]->t_sd_public }}">
                    </div>
                    <label class="control-label col-lg-2">Guru SLTP Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_sltp_public" id="t_sltp_public" placeholder="contoh: 10" value="{{ $monograph[0]->t_sltp_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru SLTA Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_slta_public" id="t_slta_public" placeholder="contoh: 10" value="{{ $monograph[0]->t_slta_public }}">
                    </div>
                    <label class="control-label col-lg-2">Guru Akademi Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_academy_public" id="t_academy_public" placeholder="contoh: 10" value="{{ $monograph[0]->t_academy_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Dosen Perguruan Tinggi Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_ptn" id="t_ptn" placeholder="contoh: 10" value="{{ $monograph[0]->t_ptn }}">
                    </div>
                </div>

                <p><i>b. Guru Pendidikan Umum Swasta</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Guru Kelompok Bermain Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_play_group_private" id="t_play_group_private" placeholder="contoh: 10" value="{{ $monograph[0]->t_play_group_private }}">
                    </div>
                    <label class="control-label col-lg-2">Guru TK Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_tk_private" id="t_tk_private" placeholder="contoh: 10" value="{{ $monograph[0]->t_tk_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru SD Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_sd_private" id="t_sd_private" placeholder="contoh: 10" value="{{ $monograph[0]->t_sd_private }}">
                    </div>
                    <label class="control-label col-lg-2">Guru SLTP Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_sltp_private" id="t_sltp_private" placeholder="contoh: 10" value="{{ $monograph[0]->t_sltp_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru SLTA Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_slta_private" id="t_slta_private" placeholder="contoh: 10" value="{{ $monograph[0]->t_slta_private }}">
                    </div>
                    <label class="control-label col-lg-2">Guru Akademi Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_academy_private" id="t_academy_private" placeholder="contoh: 10" value="{{ $monograph[0]->t_academy_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Dosen Perguruan Tinggi Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_pts" id="t_pts" placeholder="contoh: 10" value="{{ $monograph[0]->t_pts }}">
                    </div>
                </div>

                <p><i>c. Guru Pendidikan Umum Khusus</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Guru Pondok Pesantren</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_pesantren" id="t_pesantren" placeholder="contoh: 10" value="{{ $monograph[0]->t_pesantren }}">
                    </div>
                    <label class="control-label col-lg-2">Guru Madrasah</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_madrasah" id="t_madrasah" placeholder="contoh: 10" value="{{ $monograph[0]->t_madrasah }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru SLB A</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_slb_a" id="t_slb_a" placeholder="contoh: 10" value="{{ $monograph[0]->t_slb_a }}">
                    </div>
                    <label class="control-label col-lg-2">Guru SLB B</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_slb_b" id="t_slb_b" placeholder="contoh: 10" value="{{ $monograph[0]->t_slb_b }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru SLB C</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_slb_c" id="t_slb_c" placeholder="contoh: 10" value="{{ $monograph[0]->t_slb_c }}">
                    </div>
                    <label class="control-label col-lg-2">Guru Sarana Pendidikan Non Formal</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_non_formal_edu" id="t_non_formal_edu" placeholder="contoh: 10" value="{{ $monograph[0]->t_non_formal_edu }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Guru BLK (Balai Latihan Kerja)</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_blk" id="t_blk" placeholder="contoh: 10" value="{{ $monograph[0]->t_blk }}">
                    </div>
                    <label class="control-label col-lg-2">Guru Kursus</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="t_course" id="t_course" placeholder="contoh: 10" value="{{ $monograph[0]->t_course }}">
                    </div>
                </div>

                <br>

                <p><b><i>3. Berdasarkan Murid</i></b></p>
                <p><i>a. Murid Pendidikan Umum Negeri</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Murid Kelompok Bermain Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_play_group_public" id="s_play_group_public" placeholder="contoh: 10" value="{{ $monograph[0]->s_play_group_public }}">
                    </div>
                    <label class="control-label col-lg-2">Murid TK Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_tk_public" id="s_tk_public" placeholder="contoh: 10" value="{{ $monograph[0]->s_tk_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid SD Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_sd_public" id="s_sd_public" placeholder="contoh: 10" value="{{ $monograph[0]->s_sd_public }}">
                    </div>
                    <label class="control-label col-lg-2">Murid SLTP Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_sltp_public" id="s_sltp_public" placeholder="contoh: 10" value="{{ $monograph[0]->s_sltp_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid SLTA Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_slta_public" id="s_slta_public" placeholder="contoh: 10" value="{{ $monograph[0]->s_slta_public }}">
                    </div>
                    <label class="control-label col-lg-2">Mahasiswa Akademi Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_academy_public" id="s_academy_public" placeholder="contoh: 10" value="{{ $monograph[0]->s_academy_public }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Mahasiswa Perguruan Tinggi Negeri</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_ptn" id="s_ptn" placeholder="contoh: 10" value="{{ $monograph[0]->s_ptn }}">
                    </div>
                </div>

                <p><i>b. Murid Pendidikan Umum Swasta</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Murid Kelompok Bermain Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_play_group_private" id="s_play_group_private" placeholder="contoh: 10" value="{{ $monograph[0]->s_play_group_private }}">
                    </div>
                    <label class="control-label col-lg-2">Murid TK Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_tk_private" id="s_tk_private" placeholder="contoh: 10" value="{{ $monograph[0]->s_tk_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid SD Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_sd_private" id="s_sd_private" placeholder="contoh: 10" value="{{ $monograph[0]->s_sd_private }}">
                    </div>
                    <label class="control-label col-lg-2">Murid SLTP Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_sltp_private" id="s_sltp_private" placeholder="contoh: 10" value="{{ $monograph[0]->s_sltp_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid SLTA Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_slta_private" id="s_slta_private" placeholder="contoh: 10" value="{{ $monograph[0]->s_slta_private }}">
                    </div>
                    <label class="control-label col-lg-2">Mahasiswa Akademi Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_academy_private" id="s_academy_private" placeholder="contoh: 10" value="{{ $monograph[0]->s_academy_private }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Mahasiswa Perguruan Tinggi Swasta</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_pts" id="s_pts" placeholder="contoh: 10" value="{{ $monograph[0]->s_pts }}">
                    </div>
                </div>

                <p><i>c. Murid Pendidikan Umum Khusus</i></p>
                <div class="form-group">
                    <label class="control-label col-lg-2">Murid Pondok Pesantren</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_pesantren" id="s_pesantren" placeholder="contoh: 10" value="{{ $monograph[0]->s_pesantren }}">
                    </div>
                    <label class="control-label col-lg-2">Murid Madrasah</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_madrasah" id="s_madrasah" placeholder="contoh: 10" value="{{ $monograph[0]->s_madrasah }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid SLB A</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_slb_a" id="s_slb_a" placeholder="contoh: 10" value="{{ $monograph[0]->s_slb_a }}">
                    </div>
                    <label class="control-label col-lg-2">Murid SLB B</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_slb_b" id="s_slb_b" placeholder="contoh: 10" value="{{ $monograph[0]->s_slb_b }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid SLB C</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_slb_c" id="s_slb_c" placeholder="contoh: 10" value="{{ $monograph[0]->s_slb_c }}">
                    </div>
                    <label class="control-label col-lg-2">Murid Sarana Pendidikan Non Formal</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_non_formal_edu" id="s_non_formal_edu" placeholder="contoh: 10" value="{{ $monograph[0]->s_non_formal_edu }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Murid BLK (Balai Latihan Kerja)</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_blk" id="s_blk" placeholder="contoh: 10" value="{{ $monograph[0]->s_blk }}">
                    </div>
                    <label class="control-label col-lg-2">Murid Kursus</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="s_course" id="s_course" placeholder="contoh: 10" value="{{ $monograph[0]->s_course }}">
                    </div>
                </div>

                <br>

                <p><strong>III. INDUSTRI</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Besar</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="big_industry" id="big_industry" placeholder="contoh: 10" value="{{ $monograph[0]->big_industry }}">
                    </div>
                    <label class="control-label col-lg-2">Sedang</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="medium_industry" id="medium_industry" placeholder="contoh: 10" value="{{ $monograph[0]->medium_industry }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Kecil</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="small_industry" id="small_industry" placeholder="contoh: 10" value="{{ $monograph[0]->small_industry }}">
                    </div>
                    <label class="control-label col-lg-2">Rumah Tangga</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="umkm_industry" id="umkm_industry" placeholder="contoh: 10" value="{{ $monograph[0]->umkm_industry }}">
                    </div>
                </div>

                <br>

                <p><strong>IV. PARIWISATA</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Tempat Rekreasi/Hiburan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="recreation" id="recreation" placeholder="contoh: 10" value="{{ $monograph[0]->recreation }}">
                    </div>
                    <label class="control-label col-lg-2">Hotel</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="hotel" id="hotel" placeholder="contoh: 10" value="{{ $monograph[0]->hotel }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Motel</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="motel" id="motel" placeholder="contoh: 10" value="{{ $monograph[0]->motel }}">
                    </div>
                    <label class="control-label col-lg-2">Losmen</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="losmen" id="losmen" placeholder="contoh: 10" value="{{ $monograph[0]->losmen }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Restoran</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="restaurant" id="restaurant" placeholder="contoh: 10" value="{{ $monograph[0]->restaurant }}">
                    </div>
                    <label class="control-label col-lg-2">Museum Sejarah</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="museum" id="museum" placeholder="contoh: 10" value="{{ $monograph[0]->museum }}">
                    </div>
                </div>

                <br>

                <p><strong>V. PENGAIRAN</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Saluran Irigasi</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="irrigation" id="irrigation" placeholder="contoh: 10" value="{{ $monograph[0]->irrigation }}">
                    </div>
                    <label class="control-label col-lg-2">Gorong-Gorong</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="water_tunnel" id="water_tunnel" placeholder="contoh: 10" value="{{ $monograph[0]->water_tunnel }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Pompa Air</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="water_pump" id="water_pump" placeholder="contoh: 10" value="{{ $monograph[0]->water_pump }}">
                    </div>
                    <label class="control-label col-lg-2">Pembagi Air</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="water_divider" id="water_divider" placeholder="contoh: 10" value="{{ $monograph[0]->water_divider }}">
                    </div>
                </div>

                <br>

                <p><strong>VI. KELEMBAGAAN KECAMATAN</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Pengurus LPM</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="lpm" id="lpm" placeholder="contoh: 10" value="{{ $monograph[0]->lpm }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah Kader Pembangunan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="development_cadre" id="development_cadre" placeholder="contoh: 10" value="{{ $monograph[0]->development_cadre }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Jumlah Tim Penggerak PKK</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="pkk_team" id="pkk_team" placeholder="contoh: 10" value="{{ $monograph[0]->pkk_team }}">
                    </div>
                    <label class="control-label col-lg-2">Jumlah Kader PKK</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="pkk_cadre" id="pkk_cadre" placeholder="contoh: 10" value="{{ $monograph[0]->pkk_cadre }}">
                    </div>
                </div>

                <hr>

                <h6><strong>C. BIDANG KEMASYARAKATAN</strong></h6>
                <p><strong>I. KEAGAMAAN</strong></p>

                <div class="form-group">
                    <label class="control-label col-lg-2">Majelis Ta'lim</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="m_talim" id="m_talim" placeholder="contoh: 10" value="{{ $monograph[0]->m_talim }}">
                    </div>
                    <label class="control-label col-lg-2">Majelis Masjid</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="m_mosque" id="m_mosque" placeholder="contoh: 10" value="{{ $monograph[0]->m_mosque }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Majelis Gereja</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="m_church" id="m_church" placeholder="contoh: 10" value="{{ $monograph[0]->m_church }}">
                    </div>
                    <label class="control-label col-lg-2">Majelis Budha</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="m_buddha" id="m_buddha" placeholder="contoh: 10" value="{{ $monograph[0]->m_buddha }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Majelis Hindu</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="m_hindu" id="m_hindu" placeholder="contoh: 10" value="{{ $monograph[0]->m_hindu }}">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 50px; margin-left: 10px;">
                    <a class="btn btn-danger" href="{{route('admin.district.monograph.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
