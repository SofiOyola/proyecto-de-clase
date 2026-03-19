@extends('layout.app')

@section('content')

    <div class="section-header">
        <h1>💳 Simulación de pago</h1>
        <p>Estás a un paso de llevar tus mini amigos a casa 💕</p>
    </div>

    <div class="cart-wrapper">
        <div class="cart-total-box">
            <h2>Total a pagar</h2>
            <p>${{ number_format($total, 2, ',', '.') }}</p>

            <div class="checkout-message">
                Pago simulado exitosamente ✨
            </div>

            <a href="{{ route('product.index') }}" class="btn-pagar-todo">
                Volver al catálogo
            </a>
        </div>
    </div>

@endsection