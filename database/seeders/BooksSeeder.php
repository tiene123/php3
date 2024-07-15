<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'thumbnail' => $faker->imageUrl(),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'publication_date' => $faker->date(),
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 50),
                'category_id' => $faker->numberBetween(1, 5),  
            ]);
        }
    }
}

