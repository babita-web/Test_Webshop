<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        DB::table('products')->insert(
            [
                'name' => 'shirt',
                'price' => '23',
                'image' => 'img1.jpg'

        ],
            [
                'name' => 'shirt',
                'price' => '23',
                'image' => 'img1.jpg'

            ],  [
                'name' => 'shirt',
                'price' => '23',
                'image' => 'img1.jpg'

            ],
            [
                'name' => 'shirt',
                'price' => '23',
                'image' => 'img1.jpg'

            ],  [
                'name' => 'shirt',
                'price' => '23',
                'image' => 'img1.jpg'

            ]

        );
}
}
