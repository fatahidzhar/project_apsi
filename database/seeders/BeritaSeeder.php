<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            'gambar' => 'https://api2.kemenparekraf.go.id/storage/app/uploads/public/620/b45/881/620b45881ef5c417686362.jpg',
            'judul' => 'Dummy Berita 1',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'category' => 'Hello'
        ]);
    }
}
