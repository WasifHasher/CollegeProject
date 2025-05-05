<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\slider;


class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Day Night Restaurant',
                'description' => 'Best restaurant in Peshawar',
                'image' => '5.png',
                'user_id' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Food Heaven',
                'description' => 'Delicious meals for everyone',
                'image' => '4.png',
                'user_id' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Tandoori Nights',
                'description' => 'Authentic desi food served hot',
                'image' => '3.png',
                'user_id' => 1,
                'status' => 1,
            ],
        ];
    
        foreach ($sliders as $slider) {
            \App\Models\Slider::create($slider);
        }
    }
    
}
