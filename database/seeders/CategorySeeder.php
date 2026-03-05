<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        //Creamos los datos iniciales que queremos crear
        $category1 = new Category();
        $category1->name = "Llaveros";
        $category1->description = "Esta es la descripcion de los llaveros";

        //Guardar la info
        $category1->save();
        
        //Creo otra categoría
        $category2 = new Category();
        $category2->name = "Peluches";
        $category2->description = "Esta es la descripcion de los peluches";

        //Lo guardo
        $category2->save();
    }
}
