<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Elektronik', 'description' => 'Barang elektronik dan gadget'],
            ['name' => 'Pakaian', 'description' => 'Pakaian pria, wanita, dan anak'],
            ['name' => 'Makanan', 'description' => 'Makanan ringan dan kebutuhan konsumsi'],
            ['name' => 'Peralatan Rumah', 'description' => 'Barang kebutuhan rumah tangga'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                ['description' => $category['description']]
            );
        }
    }
}