<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@enviro.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('licence_report')->insert([
            'area' => 'jakarta',
            'tipe_bisnis' => 'Cabang',
            'kategori' => 'Environment',
            'klasifikasi' => 'Izin Lingkungan',
            'tipe_izin' => 'UT',
            'nib' => 'Tinggi',
            'nomor_izin' => '098765',
            'tanggal_terbit_izin' => '2024-06-28',
            'tanggal_habis_izin' => '2024-06-20',
            'status'=>'Masih Berlaku',
            'status_perizinan' => 'Izin Tidak Punya',
            'status_db' => 'Comply',
            'status_lanjut' => 'No Issue',
            'Keterangan' => '-',
            'approve' => '0',
            'progress' => 'Izin Terbit',
            'file' => 'docs/file/1719127688.pdf',
        ]);
    }
}
