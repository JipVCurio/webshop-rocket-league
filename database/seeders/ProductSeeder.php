<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            'name' => 'Artemis',
            'type' => 'Base',
            'rarity' => 'Luxury',
            'price' => 5.99,
            'description' => 'The Artemis body piece is a favorite amongst rocket league players since the release of the game.',
            'imageUrl' => '/media/uploads/artemis.png',
            'videoUrl' => null,
        ]);
    }
}
