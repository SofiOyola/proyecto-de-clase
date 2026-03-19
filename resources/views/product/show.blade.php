@extends ('layout.app')
@section('content')

    {{-- ENCABEZADO --}}
    <div class="section-header">
        <h1>✿ Detalle del MiniAmigo ✿</h1>
        <p>Conoce cada detalle de este tejido especial 💕</p>
    </div>

    {{-- CARD PRINCIPAL --}}
    <div class="detail-wrapper">
        <div class="detail-card">
                {{-- Columna imagen --}}
                <div class="detail-image-col">
                    <div class="badge-estado">{{ $product->category->description }}</div>
                    <div class="product-image-frame">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Producto">
                            @else
                                <img src="{{ asset('img/cerditoCrochet.jpg') }}" alt="ProductoBase">
                            @endif
                    </div>
                </div>
                {{-- Columna info --}}
                <div class="detail-info-col">
                    <span class="product-tag">🧵 Crochet Artesanal</span>
                    <h2 class="product-name">{{ $product->name }}</h2>
                    <div class="product-price">{{ $product->price }}</div>
                    <hr class="product-divider">
                    <p class="product-description">{{ $product->description }}</p>
                    <div class="detail-actions">
                        <a href="#" class="btn-comprar">🛒 Añadir al carrito</a>
                        @if(request('from') == 'admin')
                            <a href="{{ route('admin.productos') }}" class="btn-volver">← Volver al panel</a>
                        @else
                            <a href="{{ route('product.index') }}" class="btn-volver">← Volver al catálogo</a>
                        @endif
                    </div>
                </div>
        </div>
    </div>

    {{-- DETALLES EXTRAS --}}
    <div class="extras-wrapper">
        <div class="extras-card">
            <div class="extras-titulo">✿ Detalles del producto</div>
            <div class="extras-grid">

                <div class="extra-item">
                    <span class="extra-icon">🤲</span>
                    <div class="extra-text">
                        <strong>Tejido a mano</strong>
                        <span>100% artesanal, hecho con amor</span>
                    </div>
                </div>

                <div class="extra-item">
                    <span class="extra-icon">🧶</span>
                    <div class="extra-text">
                        <strong>Material suave</strong>
                        <span>Hilo de calidad, suave al tacto</span>
                    </div>
                </div>

                <div class="extra-item">
                    <span class="extra-icon">🎁</span>
                    <div class="extra-text">
                        <strong>Ideal para regalo</strong>
                        <span>Perfecto para cualquier ocasión especial</span>
                    </div>
                </div>

                <div class="extra-item">
                    <span class="extra-icon">🚚</span>
                    <div class="extra-text">
                        <strong>Envíos nacionales</strong>
                        <span>A todo el país con cuidado</span>
                    </div>
                </div>

                <div class="extra-item">
                    <span class="extra-icon">⏱️</span>
                    <div class="extra-text">
                        <strong>Hecho con tiempo</strong>
                        <span>Cada pieza es única e irrepetible</span>
                    </div>
                </div>

                <div class="extra-item">
                    <span class="extra-icon">💌</span>
                    <div class="extra-text">
                        <strong>Con dedicatoria</strong>
                        <span>Puedes pedir mensaje personalizado</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection