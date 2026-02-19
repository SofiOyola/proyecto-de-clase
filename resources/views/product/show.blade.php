<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conejo Crochet 🐰 | tusMiniAmigos</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    {{-- TOPBAR --}}
@include('layout.topbar')

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
                <div class="badge-estado">✅ Disponible</div>
                <div class="product-image-frame">
                    <img src="{{ asset('img/conejoCrochet.jpg') }}" alt="Conejo Crochet">
                </div>
            </div>

            {{-- Columna info --}}
            <div class="detail-info-col">
                <span class="product-tag">🧵 Crochet Artesanal</span>
                <h2 class="product-name">🐰 Conejo Crochet</h2>
                <div class="product-price">$50.000</div>
                <hr class="product-divider">
                <p class="product-description">
                    Conejito blanco tejido a mano, con overol azul y una tierna zanahoria en su bolsillo.
                    Un compañero dulce y encantador para cualquier rincón especial. Ideal como regalo o
                    como acompañante fiel del día a día. 🐰✨
                </p>
                <div class="detail-actions">
                    <a href="#" class="btn-comprar">🌸 Comprar ahora</a>
                    <a href="{{ url('/product') }}" class="btn-volver">← Volver al catálogo</a>
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
    {{-- FOOTER --}}
@include('layout.footer')

</body>
</html>