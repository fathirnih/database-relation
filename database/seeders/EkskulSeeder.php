<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekskul;

class EkskulSeeder extends Seeder
{
    public function run(): void
    {
        Ekskul::create(['nama' => 'Basket']);
        Ekskul::create(['nama' => 'Pramuka']);
        Ekskul::create(['nama' => 'Paskibra']);
    }
}
