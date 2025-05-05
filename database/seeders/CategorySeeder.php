<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Categorys = [
            [
                'category_names' => 'Shawarma',
            ],
            [
                'category_names' => 'Burger',
            ],
            [
                'category_names' => 'Pizza',
            ],
            [
                'category_names' => 'Fries',
            ],
            [
                'category_names' => 'Pepsi',
            ],
            [
                'category_names' => 'Chicken Burger',
            ],
            
        ];
        foreach ($Categorys as $Category) {
            \App\Models\category::create($Category);
        }
    }
}
