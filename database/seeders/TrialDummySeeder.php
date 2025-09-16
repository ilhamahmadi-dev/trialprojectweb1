<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TrialDummySeeder extends Seeder
{
    public function run(): void
    {
        // Data Guru
        \App\Models\Guru::create([
            'nama' => 'Pak Budi',
            'email' => 'budi@example.com',
            'password' => bcrypt('password'),
            'status' => 'aktif',
        ]);

        // Data Siswa
        \App\Models\Siswa::create([
            'nis' => '2025001',
            'nama' => 'Andi Setiawan',
            'tgl_lahir' => '2010-05-12',
            'jenis_kelamin' => 'L',
            'id_kelas' => null, // sementara kosong
            'status' => 'aktif',
        ]);

        \App\Models\Siswa::create([
            'nis' => '2025002',
            'nama' => 'Siti Aminah',
            'tgl_lahir' => '2011-03-08',
            'jenis_kelamin' => 'P',
            'id_kelas' => null,
            'status' => 'aktif',
        ]);
    }
}
