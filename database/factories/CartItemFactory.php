<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;
use App\Models\CartItem;


class CartItemFactory extends Factory
{

    protected $model = CartItem::class;

    public function definition(): array
    {
        return [
            
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'quantity' => fake()->numberBetween(1,5)
        ];
    }
}
