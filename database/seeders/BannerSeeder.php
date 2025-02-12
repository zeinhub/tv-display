<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::factory()->create([
            [
                'name' => 'banner 1',
                'filename' => '1.jpg',
            ],
            [
                'name' => 'banner 2',
                'filename' => '2.jpg',
            ],
            [
                'name' => 'banner 3',
                'filename' => '3.jpg',
            ],
            [
                'name' => 'banner 4',
                'filename' => '4.jpg',
            ],
            [
                'name' => 'banner 5',
                'filename' => '5.jpg',
            ],
            [
                'name' => 'banner 6',
                'filename' => '6.jpg',
            ],
            [
                'name' => 'banner 7',
                'filename' => '7.jpg',
            ],
            [
                'name' => 'banner 8',
                'filename' => '8.jpg',
            ],
            [
                'name' => 'banner 9',
                'filename' => '9.jpg',
            ],
        ]);
    }
}
