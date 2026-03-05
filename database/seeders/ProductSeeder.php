<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        //Creamos los datos iniciales que queremos crear
        $product1 = new Product();
        $product1->name = "Llavero vaquita";
        $product1->description = "Esta es la descripcion del llavero vaquita";
        $product1->price = 15000;
        $product1->category_id = 1;

        //Guardar la info
        $product1->save();

        //Producto 2
        $product2 = new Product();
        $product2->name = "Ranirani";
        $product2->description = "Esta es la descripcion de la ranita";
        $product2->price = 50000;
        $product2->category_id = Category::inRandomOrder()->first()->id;

        //Guardar la info
        $product2->save();

        //Producto 3
        $product3 = new Product();
        $product3->name = "Llavero Snoopy";
        $product3->description = "Esta es la descripcion del llavero snoopy";
        $product3->price = 15000;
        $product3->category_id = 1;

        //Guardar la info
        $product3->save();
    }
}
