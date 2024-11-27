<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(50)->create([
            'category_id' => Category::all()->random()->id,
        ]);

        foreach ($products as $product) {
            $product->stocks()->create([
                'quantity' => rand(1, 10),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 3),
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(3, 4),
                    ]
                ])
            ]);
        }
    }


}
