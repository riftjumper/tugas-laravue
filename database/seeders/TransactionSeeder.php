<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Transaction;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 5; $i++){
            $transaction = new Transaction;

            $transaction->user_id = $faker->numberBetween(11,12);
            $transaction->product_id = $faker->numberBetween(6,10);
            $transaction->qty = $faker->numberBetween(1,10);
            $transaction->payment_status = $faker->randomElement(['paid','unpaid']);
            $transaction->date_start = '2023-07-27';
            $transaction->date_end ='2023-08-31';

            $transaction->save();
        }
    }
}
