<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Warga::insert([
            'nama' => 'dzikri nafil',
            'jenis_kelamin' => 0,
            'alamat' => 'jln cibay',
        ]);

        Warga::insert([
            'nama' => ' nafil',
            'jenis_kelamin' => 0,
            'alamat' => 'jln ac',
        ]);

        Warga::insert([
            'nama' => 'ujang',
            'jenis_kelamin' => 0,
            'alamat' => 'jln cibay',
        ]);

        Warga::insert([
            'nama' => 'iis',
            'jenis_kelamin' => 1,
            'alamat' => 'jln cibay',
        ]);

        Warga::insert([
            'nama' => 'nini',
            'jenis_kelamin' => 1,
            'alamat' => 'jln cibay',
        ]);
    }

}
