<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $customers = Customer::all();
        $products = Product::all();

        for ($i = 0; $i < 100; $i++) {
            $product = $products->random();
            $qty = rand(1, 10);
            
            Transaction::create([
                'date' => fake()->dateTimeBetween('-1 year', 'now'),
                'customer_id' => $customers->random()->id,
                'product_id' => $product->id,
                'qty' => $qty,
                'total' => $product->price * $qty,
            ]);
        }
    }
}