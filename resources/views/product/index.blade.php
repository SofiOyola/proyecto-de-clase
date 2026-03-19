@extends('layout.app')
@section('content')
 
    {{-- HERO --}}
    <div class="hero">
        <h1>🌸 Amiguitos de Crochet 🌸</h1>
        <p>Tejidos a mano con amor, uno por uno, solo para ti 💕</p>
    </div>
 
    {{-- SECCIÓN PRODUCTOS --}}
    <section class="productos-section">
        <div class="productos-titulo">🧁 Nuestros Mini Amigos</div>
 
        <div class="productos-scroll">
 
            @foreach ($misProductos as $product)
                <div class="card">
                    <div class="card-img-wrapper">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Producto">
                        @else
                            <img src="{{ asset('img/cerditoCrochet.jpg') }}" alt="ProductoBase">
                        @endif
                    </div>
                    <div class="card-nombre">{{ $product->name }}</div>
                    <div class="card-descripcion">{{ $product->description }}</div>
                    <div class="card-precio">{{ $product->price }}</div>
                    <a href="{{ route('product.show', $product) }}" class="btn-comprar">
                        🛍️ Comprar ahora
                    </a>
                    <form action="{{ route('product.destroy', $product) }}" method="POST" class="form-eliminar">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn-eliminar">🗑️ Eliminar</button>
                    </form>
                </div>
            @endforeach
 
        </div>
 
        <div class="btn-agregar-wrapper">
            <a href="{{ url('/product/create') }}" class="btn-agregar">
                ✿ Agregar Producto
            </a>

            <a href="{{ route('cart.index') }}" class="btn-carrito">
                🛒 Carrito de compras
            </a>
        </div>
 
    </section>
 
@endsection