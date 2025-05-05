<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $Products = [
            [
                'name' => 'Shawarma',
                'price' => 200,
                'image' => '1.png',
                'desc' => 'Shawarma is a popular Middle Eastern street food made by stacking slices of marinated meat (usually chicken, beef, or lamb) on a vertical spit and slowly roasting it.',
                'user_id' => 1,
                'categoryname' => 5,
            ],
            [
                'name' => 'Chicken Burger',
                'price' => 250,
                'image' => '2.png',
                'desc' => 'A delicious chicken burger with crispy fried chicken, fresh lettuce, tomatoes, and mayo in a soft bun.',
                'user_id' => 1,
                'categoryname' => 1,
            ],
            [
                'name' => 'Zinger Burger',
                'price' => 300,
                'image' => '3.png',
                'desc' => 'Zinger burger with spicy deep-fried chicken fillet, lettuce, and zinger sauce in a toasted bun.',
                'user_id' => 1,
                'categoryname' => 2,
            ],
            [
                'name' => 'Pizza Margherita',
                'price' => 800,
                'image' => '4.png',
                'desc' => 'Classic Margherita pizza with fresh mozzarella, tomatoes, basil, and olive oil on a crispy thin crust.',
                'user_id' => 1,
                'categoryname' => 3,
            ],
            [
                'name' => 'Chicken Tikka',
                'price' => 350,
                'image' => '5.png',
                'desc' => 'Grilled chicken tikka pieces marinated in traditional spices, served hot with chutney.',
                'user_id' => 1,
                'categoryname' => 2,
            ],
            [
                'name' => 'Beef Biryani',
                'price' => 300,
                'image' => '6.png',
                'desc' => 'Aromatic beef biryani made with basmati rice, tender beef, and traditional biryani spices.',
                'user_id' => 1,
                'categoryname' => 3,
            ],
           
           
        ];
        
        foreach ($Products as $Product) {
            \App\Models\Product::create($Product);
        }

    }
}
