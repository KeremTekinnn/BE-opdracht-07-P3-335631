<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = DB::table('products')->get();
        $allergies = DB::table('allergies')->get();

        foreach ($products as $product) {
            foreach ($allergies as $allergy) {
                if (rand(0, 1)) { // Randomly decide if this product has this allergy
                    DB::table('product_allergies')->insert([
                        'product_id' => $product->id,
                        'allergy_id' => $allergy->id,
                    ]);
                }
            }
        }
    }
}
