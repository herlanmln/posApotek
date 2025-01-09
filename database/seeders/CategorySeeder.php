<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Obat Bebas'],
            ['name' => 'Vitamin'],
            ['name' => 'Obat Flu dan Batuk'],
            ['name' => 'P3K'],
            ['name' => 'Perawatan Kulit'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
