<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('object_wisatas')->insert(
            [
                'gambar' => 'https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2022/06/mpGDXVHoSzKsqkWsopmjWg_thumb_470.webp',
                'judul' => 'Objek Wisata Dummy 6',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ]
        );
    }
}
