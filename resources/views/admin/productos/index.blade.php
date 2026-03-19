@extends('layout.admin')

@section('admin-title', 'Productos')

@section('admin-content')

    <section class="admin-products-header">
        <div>
            <h2 class="admin-products-title">Productos del administrador</h2>
            <p class="admin-products-subtitle">
                Aquí puedes visualizar, gestionar y eliminar los peluches publicados en tu tienda.
            </p>
        </div>
    </section>

    <section class="admin-products-section">
        @if($misProductos->isEmpty())
            <div class="admin-empty-state">
                <h3>No hay productos registrados</h3>
                <p>Cuando agregues un nuevo producto, aparecerá aquí.</p>
            </div>
        @else
            <div class="admin-products-scroll">
                @foreach ($misProductos as $product)
                    <article class="admin-product-mini-card">
                        <div class="admin-product-mini-image">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('img/cerditoCrochet.jpg') }}" alt="Producto base">
                            @endif
                        </div>

                        <div class="admin-product-mini-body">
                            <h3 class="admin-product-mini-name">{{ $product->name }}</h3>
                            <p class="admin-product-mini-description">{{ $product->description }}</p>
                            <p class="admin-product-mini-price">${{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>

                        <div class="admin-product-mini-actions">
                            <a href="{{ route('product.show', $product) }}?from=admin" class="admin-mini-btn secondary">
                                Ver
                            </a>

                            <form action="{{ route('product.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="from" value="admin">
                                <button type="submit" class="admin-mini-btn danger">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </section>

@endsection