<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia
        
        for($i = 0; $i < 100; $i++) {
            Customer::create([
                'name' => $faker->name(),
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
            ]);
        }
    }
}
