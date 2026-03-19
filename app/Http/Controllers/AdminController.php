<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalProductos = Product::count();
        $totalCategorias = Category::count();

        return view('admin.dashboard', [
            'totalProductos' => $totalProductos,
            'totalCategorias' => $totalCategorias
        ]);
    }
}