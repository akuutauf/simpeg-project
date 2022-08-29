<?php

namespace Database\Seeders;

use App\Models\JabatanSeed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JabatanSeed::insert([
            ['name' => 'Direktur'],
            ['name' => 'Teknisi'],
            ['name' => 'Administrasi'],
            ['name' => 'Keamanan'],
            ['name' => 'Kepala Jurusan'],
            ['name' => 'Kepala Program Studi'],
            ['name' => 'Dosen'],
        ]);
    }
}
