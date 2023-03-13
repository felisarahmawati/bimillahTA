<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id_role" => 1,
            "name" => "Petugas",
            "username" => "240302",
            "email" => "petugasperpus@gmail.com",
            "password" => bcrypt("petugas"),
            "alamat" => "Jl. Raya Pabean Udik No.15",
            "telp" => "+62 (0234) 276308",
            "kelurahan" => "Pabean Udik",
            "kecamatan" => "Indramayu",
            "kota_kab" => "Indramayu",
            "provinsi" => "Jawa Barat"
        ]);

        User::create([
            "id_role" => 2,
            "name" => "Anggota",
            "username" => "2003012",
            "email" => "Anggotaperpus@gmail.com",
            "password" => bcrypt("Anggota"),
            "alamat" => "Jl. Raya Pabean Udik No.15",
            "telp" => "08123276308",
            "kelurahan" => "Pabean Udik",
            "kecamatan" => "Indramayu",
            "kota_kab" => "Indramayu",
            "provinsi" => "Jawa Barat"
        ]);
    }
}
