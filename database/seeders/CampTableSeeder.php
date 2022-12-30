<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;
use PhpParser\Node\Stmt\Foreach_;

// use Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Pendaftaran',
                'slug' => 'pendaftaran',
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Sumbangan Penyelenggaraan Pendidikan',
                'slug' => 'spp',
                'price' => 450,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        // foreach ($camps as $key => $camp){
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
    }
}
