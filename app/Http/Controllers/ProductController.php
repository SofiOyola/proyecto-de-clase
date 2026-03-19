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
            'category' => 'required|exists:categories, id' //Aquí valido pa que también exista en la tabla
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

        if ($request->get('from') === 'admin') {
            return redirect()->route('admin.productos')
                ->with('success', 'Producto creado correctamente.');
        }

        return redirect()->route('product.index')
            ->with('success', 'Producto creado correctamente.');      
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();

        if ($request->get('from') === 'admin') {
            return redirect()->route('admin.productos')
                ->with('success', 'Producto eliminado correctamente.');
        }

        return redirect()->route('product.index')
            ->with('success', 'Producto eliminado correctamente.');
    }

    public function adminIndex()
    {
        $productList = Product::orderBy('id', 'desc')->get();

        return view('admin.productos.index', [
            'misProductos' => $productList
        ]);
    }
}