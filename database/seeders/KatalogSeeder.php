<?php

namespace Database\Seeders;

use App\Models\Katalog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Katalog::create([
            "id_katalog" => "BK001",
            "nama_katalog" => "Ensiklopedia",
            "slug" => "ensiklopedia"
        ]);
    }
}
