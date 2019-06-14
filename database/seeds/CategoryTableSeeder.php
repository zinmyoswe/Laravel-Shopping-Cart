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
            ['name' => 'Shoes', 'slug' => 'shoes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bags & Backpacks', 'slug' => 'bags&backpacks', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hoodies & Sweatshirts', 'slug' => 'hoodies&sweatshirts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'T-shirts', 'slug' => 't-shirts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shirts', 'slug' => 'shirts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pants', 'slug' => 'pants', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shorts', 'slug' => 'shorts', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
