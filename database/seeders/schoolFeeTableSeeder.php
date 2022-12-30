<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schoolfee;

class schoolFeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fees = [
            [
                'jenjang_sekolah' => 'SLB Cendana Rumbai',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 450000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'PAUD Cendana Rumbai',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 450000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SD Cendana Rumbai',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 750000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SMP Cendana Rumbai',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 900000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SMA Cendana Pekanbaru',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 1100000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SLB Cendana Duri',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 450000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'PAUD Cendana Duri',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 450000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SD Cendana Duri',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 750000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SMPS Cendana Duri',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 900000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jenjang_sekolah' => 'SMAS Cendana Duri',
                'judul' => 'SPP',
                'slug' => 'spp',
                'biaya' => 1100000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // foreach ($camps as $key => $camp){
        //     Camp::create($camp);
        // }

        // 2nd method
        Schoolfee::insert($fees);
    }
}
