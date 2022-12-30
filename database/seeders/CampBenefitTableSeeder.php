<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campbenefits = [
            [
                'camp_id' => 1,
                'name' => 'Guru Berkualitas'
            ],
            [
                'camp_id' => 1,
                'name' => 'Fasilitas Lengkap',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pendidikan Terjamin'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Best University'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opprtunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Seragam Terbaru'
            ],
            [
                'camp_id' => 1,
                'name' => 'FUTURE'
            ],
            [
                'camp_id' => 2,
                'name' => 'Fasilitas Terjaga'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pendidikan Terjamin'
            ],
            [
                'camp_id' => 2,
                'name' => 'Future University Opportinity'
            ],
        ];

        CampBenefit::insert($campbenefits);
    }
}
