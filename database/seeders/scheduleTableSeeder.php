<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class scheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            [
                'jalur' => 'Reguler',
                'kegiatan' => 'Pendaftaran',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-01-31'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Reguler',
                'kegiatan' => 'Seleksi dan Pengumuman Diterima',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-01-31'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Reguler',
                'kegiatan' => 'Pendaftaran Ulang',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-02-07'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Prestasi',
                'kegiatan' => 'Pendaftaran',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-01-31'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Prestasi',
                'kegiatan' => 'Seleksi dan Pengumuman Diterima',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-01-31'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Prestasi',
                'kegiatan' => 'Pendaftaran Ulang',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-02-07'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Keluarga Kurang Mampu',
                'kegiatan' => 'Pendaftaran',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-01-31'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Keluarga Kurang Mampu',
                'kegiatan' => 'Seleksi dan Pengumuman Diterima',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-01-31'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'jalur' => 'Keluarga Kurang Mampu',
                'kegiatan' => 'Pendaftaran Ulang',
                'tanggal_mulai' => date('2022-11-08'),
                'tanggal_selesai' => date('2023-02-07'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        Schedule::insert($schedules);
    }
}
