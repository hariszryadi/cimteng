<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePotencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_potency')->insert([
            [
                'name' => 'RESTORAN DAN PENYEDIAAN MAKANAN KELILING'
            ],
            [
                'name' => 'INDUSTRI PRODUK MAKANAN LAINNYA'
            ],
            [
                'name' => 'INDUSTRI PRODUK ROTI DAN KUE'
            ],
            [
                'name' => 'JASA PENUNJANG USAHA LAINNYA YTDL'
            ],
            [
                'name' => 'PERDAGANGAN ECERAN BARANG KERAJINAN DAN LUKISAN DI TOKO'
            ],
            [
                'name' => 'JASA PENUNJANG PENCETAKAN'
            ],
            [
                'name' => 'INDUSTRI MAKANAN DAN MASAKAN OLAHAN'
            ],
            [
                'name' => 'PENYEDIAAN MAKANAN LAINNYA'
            ],
            [
                'name' => 'PERDAGANGAN ECERAN YANG UTAMANYA MAKANAN, MINUMAN ATAU TEMBAKAU DI TOKO'
            ],
            [
                'name' => 'INDUSTRI PAKAIAN JADI RAJUTAN DAN SULAMAN/BORDIR'
            ],
            [
                'name' => 'PERDAGANGAN ECERAN KHUSUS BARANG DAN BAHAN BANGUNAN, CAT DAN KACA DI TOKO'
            ]
        ]);
    }
}
