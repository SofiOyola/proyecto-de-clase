<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productList = Product::limit(10)->orderBy('id','desc')->get();

        return view('product.index', [
            'misProductos' => $productList
        ]);
    }

    public function create(){

        $categoryList = Category::all();
        return view('product.create',[
            'categoryList' => $categoryList
        ]);
    }

    public function store(Request $request){

        //VALIDACIONES
        $request-> validate([
            //Por cada item coloco una regla
            'nombre' => 'required|min:2|max:250', //Aquí le digo que nombre debe de ser requerido, que 
                                                //Lo mínimo digitado es 2 y máximo 250
            'precio' => 'required|numeric', //Aquí le digo que es requerido y numérido
            'descripcion' => 'required', 
            'imagen' => 'required|image', 
            'categoria' => 'required|exists: categories, id' //Aquí valido pa que también exista en la tabla
        ]);


        //dd($request->all());

        $newProduct = new Product();
        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('descripcion');
        $newProduct->price = $request->get('precio');
        $newProduct->category_id = $request->get('category');

        if($request->hasFile('imagen')){
            //recuperamos la ruta
            $ruta = $request->file('imagen')->store('images','public');
            $newProduct->image = $ruta;
        }

        $newProduct->save();

        //Retorne y me lleve al index
        return redirect()->route('product.index');        
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index');
    }
}