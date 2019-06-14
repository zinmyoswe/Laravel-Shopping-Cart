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
        	'name' => 'NMD_R1 Shoes',
        	'slug' => 'nmd_r1 shoes',
        	'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
        	'price' => 130,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 1,
        'photo' => 'nmdshoe1.png',

        ]);

        Product::create([
        	'name' => 'NMD_R1 STLT Primeknit Shoes',
        	'slug' => 'nmd_r1 stlt primeknit shoes',
        	'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
        	'price' => 180,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 1,
        'photo' => 'swiftrunshoe.png',

        ]);

        Product::create([
        	'name' => 'adidas NMD Backpack',
        	'slug' => 'adidas nmd backpack',
        	'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
        	'price' => 65,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 2,
        'photo' => 'addiasbag.png',

        ]);
        Product::create([
        	'name' => 'adidas NMD Gym Sack',
        	'slug' => 'adidas nmd gym sack',
        	'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
        	'price' => 20,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 2,
        'photo' => 'backpack.png',

        ]);
        Product::create([
        	'name' => 'Trefoil Hoodie',
        	'slug' => 'trefoil hoodie',
        	'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
        	'price' => 68,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 3,
        'photo' => 'hoodie.png',

        ]);
        Product::create([
        	'name' => 'Must Haves 3-Stripes French Te…',
        	'slug' => 'must haves 3-stripes french Te…',
        	'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
        	'price' => 75,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 3,
        'photo' => 'three.png',

        ]);
          Product::create([
            'name' => 'NMD_RACER PRIMEKNIT SHOES',
            'slug' => 'nmd_racer primeknit shoes',
            'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
            'price' => 126,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 1,
        'photo' => 'nmd2.png',

        ]);
            Product::create([
            'name' => 'SUPERSTAR FOUNDATION SHOES',
            'slug' => 'superstar foundation shoes',
            'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
            'price' => 80,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 1,
        'photo' => 'superstar.png',

        ]);
              Product::create([
            'name' => 'ULTRABOOST PARLEY SHOES',
            'slug' => 'ultraboost parley shoes',
            'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
            'price' => 135,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'category_id' => 1,
        'photo' => 'ultra2.png',

        ]);
    }
}
