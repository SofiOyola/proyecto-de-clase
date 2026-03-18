<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItem;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        /*$this->call([
            CategorySeeder::class, //claseQueQuieroPuntearSeeder::class
            ProductSeeder::class
        ]);*/
        //Category::factory(1000)->create();
        //Product::factory(1000)->create();
        //User::factory(1000)->create();
        CartItem::factory(1000)->create();
    }
}
