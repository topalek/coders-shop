<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            $name = "Women's " . $i;
            Product::create([
                'title'       => $name,
                'slug'        => str($name)->slug(),
                'details'     => "women's hoodie",
                'description' => $i . fake()->text,
                'code'        => $i . "-00",
                'price'       => rand(999, 9999),
                'quantity'    => rand(1, 10),
            ]);
        }

        for ($i = 1; $i <= 12; $i++) {
            $name = "Men's " . $i;
            Product::create([
                'title'       => $name,
                'slug'        => str($name)->slug(),
                'details'     => "Men's hoodie",
                'description' => $i . fake()->text,
                'code'        => $i . "-01",
                'price'       => rand(999, 9999),
                'quantity'    => rand(1, 10),
            ]);
        }

        for ($i = 1; $i <= 12; $i++) {
            $name = "Kid's " . $i;
            Product::create([
                'title'       => $name,
                'slug'        => str($name)->slug(),
                'details'     => "kid's hoodie",
                'description' => $i . fake()->text,
                'code'        => $i . "-02",
                'price'       => rand(999, 9999),
                'quantity'    => rand(1, 10),
            ]);
        }

        for ($i = 1; $i <= 12; $i++) {
            $name = "Home goods " . $i;
            Product::create([
                'title'       => $name,
                'slug'        => str($name)->slug(),
                'details'     => "Home goods" . $i,
                'description' => $i . fake()->text,
                'code'        => $i . "-03",
                'price'       => rand(999, 9999),
                'quantity'    => rand(1, 10),
            ]);
        }
    }
}
