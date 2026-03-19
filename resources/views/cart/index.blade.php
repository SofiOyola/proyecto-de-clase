@extends('layout.app')

@section('content')

    <div class="section-header">
        <h1>🛒 Carrito de compras</h1>
        <p>Revisa tus mini amigos seleccionados antes de continuar 💕</p>
    </div>

    @if(session('success'))
        <div class="alert-success-cart">
            {{ session('success') }}
        </div>
    @endif

    <div class="cart-wrapper">
        @if(count($cartItems) > 0)
            <div class="cart-list">
                @foreach($cartItems as $item)
                    <div class="cart-card">
                        <div class="cart-image">
                            @if($item['image'])
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                            @else
                                <img src="{{ asset('img/cerditoCrochet.jpg') }}" alt="Producto base">
                            @endif
                        </div>

                        <div class="cart-info">
                            <h3>{{ $item['name'] }}</h3>
                            <p>Cantidad: {{ $item['quantity'] }}</p>
                            <p>Precio: ${{ number_format($item['price'], 2, ',', '.') }}</p>
                            <p>Subtotal: ${{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</p>
                        </div>

                        <div class="cart-actions">
                            <form action="{{ route('cart.destroy', $item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar-carrito">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cart-total-box">
                <h2>Total a pagar</h2>
                <p>${{ number_format($total, 2, ',', '.') }}</p>

                <div class="cart-total-actions">
                    <a href="{{ route('product.index') }}" class="btn-volver">
                        ← Volver al catálogo
                    </a>

                    <a href="{{ route('cart.checkout') }}" class="btn-pagar-todo">
                        💳 Pagar Todo
                    </a>
                </div>
            </div>
        @else
            <div class="cart-empty">
                <h3>Tu carrito está vacío</h3>
                <p>Aún no has añadido mini amigos a tu carrito.</p>
                <a href="{{ route('product.index') }}" class="btn-volver">← Volver al catálogo</a>
            </div>
        @endif
    </div>

@endsection