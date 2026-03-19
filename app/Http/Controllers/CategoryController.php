<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categoryList = Category::orderBy('id', 'desc')->get();

        return view('admin.categorias.index', [
            'categoryList' => $categoryList
        ]);
    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:150',
            'description' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();

        return redirect()->route('admin.categorias');
    }

    public function edit(Category $category)
    {
        return view('admin.categorias.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:2|max:150',
            'description' => 'required'
        ]);

        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();

        return redirect()->route('admin.categorias');
    }

    public function destroy(Category $category)
    {
        if ($category->products()->count() > 0) {
            return redirect()->route('admin.categorias')
                ->with('error', 'No se puede eliminar la categoría porque tiene productos asociados.');
        }

        $category->delete();

        return redirect()->route('admin.categorias')
            ->with('success', 'Categoría eliminada correctamente.');
    }
}