<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        $obatNames = [
            'Paracetamol', 'Amoxicillin', 'Ibuprofen', 'Omeprazole', 'Cetirizine',
            'Vitamin C', 'Vitamin D', 'Vitamin B Complex', 'Zinc', 'Calcium',
            'Aspirin', 'Antasida', 'Dexamethasone', 'Betadine', 'Mefenamic Acid',
            'Loratadine', 'Simvastatin', 'Metformin', 'Amlodipine', 'Captopril'
        ];
        
        $units = ['tablet', 'kapsul', 'botol', 'strip', 'sachet'];

        for ($i = 0; $i < 100; $i++) {
            $baseName = $faker->randomElement($obatNames);
            $unit = $faker->randomElement($units);
            $strength = $faker->randomElement(['100mg', '250mg', '500mg', '650mg', '1000mg']);
            
            Product::create([
                'category_id' => $faker->numberBetween(1, 5),
                'name' => $baseName . ' ' . $strength . ' ' . $unit,
                'description' => $faker->paragraph(3),
                'price' => $faker->numberBetween(5000, 200000),
                'image' => strtolower(str_replace(' ', '-', $baseName)) . '.jpg',
            ]);
        }
    }
}
