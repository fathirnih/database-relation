<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Ekskul;

class SiswaEkskulSeeder extends Seeder
{
    public function run(): void
    {
        $siswa1 = Siswa::where('nama', 'Fathir')->first();
        $siswa2 = Siswa::where('nama', 'Nanda')->first();

        $ekskul1 = Ekskul::where('nama', 'Basket')->first();
        $ekskul2 = Ekskul::where('nama', 'Pramuka')->first();

        $siswa1->ekskuls()->attach([$ekskul1->id, $ekskul2->id]);
        $siswa2->ekskuls()->attach([$ekskul2->id]);
    }
}
