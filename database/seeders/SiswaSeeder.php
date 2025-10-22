<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create(['nama' => 'Fathir', 'nisn' => '123456']);
        Siswa::create(['nama' => 'Nanda', 'nisn' => '654321']);
    }
}
