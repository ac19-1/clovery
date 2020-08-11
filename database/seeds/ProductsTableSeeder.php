<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->product_name = 'Areca Palm';
        $product->product_price = 126000;
        $product->product_image = 'areca_palm.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'English Ivy';
        $product->product_price = 130000;
        $product->product_image = 'english_ivy.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Aloe Vera';
        $product->product_price = 124000;
        $product->product_image = 'aloe_vera.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Indian Basil';
        $product->product_price = 146000;
        $product->product_image = 'indian_basil.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Dracaena';
        $product->product_price = 157000;
        $product->product_image = 'dracaena.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Ladies’ Slipper Orchid';
        $product->product_price = 169000;
        $product->product_image = 'ladies_slipper_orchid.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Spider Plant';
        $product->product_price = 137000;
        $product->product_image = 'spider_plant.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Azalea';
        $product->product_price = 126000;
        $product->product_image = 'azalea.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Snake plant';
        $product->product_price = 168000;
        $product->product_image = 'snake_plant.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Weeping Fig';
        $product->product_price = 190000;
        $product->product_image = 'weeping_fig.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Lily';
        $product->product_price = 149000;
        $product->product_image = 'lily.jpg';
        $product->save();

        $product = new Product();
        $product->product_name = 'Orchid';
        $product->product_price = 189000;
        $product->product_image = 'orchid.jpg';
        $product->save();
    }
}
