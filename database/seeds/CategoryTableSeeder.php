<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Redmi Phone', 'slug' => 'redmi-phone', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mi Phone', 'slug' => 'mi-phone', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pocophone', 'slug' => 'pocophone', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mi Phowerbank', 'slug' => 'mi-powerbank', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mi TV', 'slug' => 'mi-tv', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Aksesoris', 'slug' => 'aksesoris', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
