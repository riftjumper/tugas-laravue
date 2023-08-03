<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        for ($i=0; $i < 5; $i++){
            $product = new Product;

            $product->name = $faker->word;
            $product->price = $faker->randomNumber(5);
            $product->stock = $faker->randomNumber(2,true);
            $product->status = $faker->randomElement(['active','inactive']);

            $product->save();
        }
    }
}
