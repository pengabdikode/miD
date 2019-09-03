<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Product::create([
            'name' => 'Xiaomi Redmi 4X',
            'slug' => 'xiaomi-redmi-4x',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1100000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_redmi4x-1.png',
            'foto2' => 'foto2/hp_redmi4x-2.png',
            'foto3' => 'foto3/hp_redmi4x-3.png'

        ])->categories()->attach(1);

        $product = Product::find(1);
        $product->categories()->attach(2);

        Product::create([
            'name' => 'Xiaomi Redmi Note',
            'slug' => 'xiaomi-redmi-note',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1200000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_redminote-1.png',
            'foto2' => 'foto2/hp_redminote-2.png',
            'foto3' => 'foto3/hp_redminote-3.png'

        ])->categories()->attach(1);

        Product::create([
            'name' => 'Samsung A 80',
            'slug' => 'samsung-a-80',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1300000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_samsunga80-1.jpg',
            'foto2' => 'foto2/hp_samsunga80-2.jpg',
            'foto3' => 'foto3/hp_samsunga80-3.png'

        ])->categories()->attach(2);

        Product::create([
            'name' => 'Xiaomi Pochophone',
            'slug' => 'xiaomi-pochopone',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1400000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_xiaomipochophone-1.jpg',
            'foto2' => 'foto2/hp_xiaomipochophone-2.jpg',
            'foto3' => 'foto3/hp_xiaomipochophone-3.jpg'

        ])->categories()->attach(2);

        Product::create([
            'name' => 'Xiaomi Redmi 5',
            'slug' => 'xiaomi-redmi-5',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1500000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_xiaomipochophone-1.jpg',
            'foto2' => 'foto2/hp_xiaomipochophone-2.jpg',
            'foto3' => 'foto3/hp_xiaomipochophone-3.jpg'

        ])->categories()->attach(3);

        Product::create([
            'name' => 'Xiaomi Redmi 6',
            'slug' => 'xiaomi-redmi-6',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1600000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_xiaomipochophone-1.jpg',
            'foto2' => 'foto2/hp_xiaomipochophone-2.jpg',
            'foto3' => 'foto3/hp_xiaomipochophone-3.jpg'

        ])->categories()->attach(4);

        Product::create([
            'name' => 'Xiaomi Redmi 7',
            'slug' => 'xiaomi-redmi-7',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1700000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_xiaomipochophone-1.jpg',
            'foto2' => 'foto2/hp_xiaomipochophone-2.jpg',
            'foto3' => 'foto3/hp_xiaomipochophone-3.jpg'

        ])->categories()->attach(5);

        Product::create([
            'name' => 'Xiaomi Redmi 8',
            'slug' => 'xiaomi-redmi-8',
            'details' => '5 inch, 16 MP, 3GB RAM',
            'price' => 1800000,
            'description' => 'Smartphone termurah dengan spesifikasi tinggi',
            'foto1' => 'foto1/hp_xiaomipochophone-1.jpg',
            'foto2' => 'foto2/hp_xiaomipochophone-2.jpg',
            'foto3' => 'foto3/hp_xiaomipochophone-3.jpg'

        ])->categories()->attach(6);
        
    }
}
