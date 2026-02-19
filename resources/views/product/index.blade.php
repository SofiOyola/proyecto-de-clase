<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tusMiniAmigos 🌸</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    {{-- Decoraciones florales de fondo --}}
    <div class="deco-flores deco-tl">🌸🌷🌸</div>
    <div class="deco-flores deco-tr">🌷🌸🌷</div>
    <div class="deco-flores deco-bl">🌸🌷🌸</div>
    <div class="deco-flores deco-br">🌷🌸🌷</div>

    {{-- TOPBAR --}}
    <div class="topbar">
        <span>
            <span class="flower">✿</span>
            Hecho a mano con amor
            <span class="flower">✿</span>
            Envíos a todo el país
            <span class="flower">✿</span>
        </span>
    </div>

    {{-- NAVBAR --}}
    <nav class="navbar">
        <a href="{{ url('/') }}" class="navbar-brand">
            <span>🧸</span> tusMiniAmigos
        </a>
        <a href="tel:3162273844" class="navbar-contact">
            📱 316 227 3844
        </a>
    </nav>

    {{-- HERO --}}
    <div class="hero">
        <h1>🌸 Amiguitos de Crochet 🌸</h1>
        <p>Tejidos a mano con amor, uno por uno, solo para ti 💕</p>
    </div>

    {{-- SECCIÓN PRODUCTOS --}}
    <section class="productos-section">
        <div class="productos-titulo">🧁 Nuestros Mini Amigos</div>

        <div class="productos-scroll">

            {{-- Producto 1: Conejo --}}
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="{{ asset('img/conejoCrochet.jpg') }}" alt="Conejo Crochet">
                </div>
                <div class="card-nombre">🐰 Conejo Crochet</div>
                <div class="card-descripcion">
                    Conejito blanco tejido a mano, con overol azul y una tierna zanahoria en su bolsillo. Un compañero dulce y encantador.
                </div>
                <div class="card-precio">$50.000</div>
                <a href="#" class="btn-comprar">🛍️ Comprar ahora</a>
            </div>

            {{-- Producto 2: Totoro --}}
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="{{ asset('img/totoroCrochet.jpg') }}" alt="Totoro Crochet">
                </div>
                <div class="card-nombre">🌫️ Totoro Crochet</div>
                <div class="card-descripcion">
                    Adorable Totoro gris tejido en crochet, inspirado en la magia de "Mi vecino Totoro". Suaves detalles que enamoran.
                </div>
                <div class="card-precio">$45.000</div>
                <a href="#" class="btn-comprar">🛍️ Comprar ahora</a>
            </div>

            {{-- Producto 3: Cerdito --}}
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="{{ asset('img/cerditoCrochet.jpg') }}" alt="Cerdito Crochet">
                </div>
                <div class="card-nombre">🐷 Cerdito Crochet</div>
                <div class="card-descripcion">
                    Dulce cerdito tejido con un encantador gorrito de sapito. Perfecto para regalar ternura en forma de peluche.
                </div>
                <div class="card-precio">$30.000</div>
                <a href="#" class="btn-comprar">🛍️ Comprar ahora</a>
            </div>

            {{-- Producto 4: Gato --}}
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="{{ asset('img/gatoCrochet.jpg') }}" alt="Gato Crochet">
                </div>
                <div class="card-nombre">🐱 Gato Crochet</div>
                <div class="card-descripcion">
                    Gatito blanco y negro tejido con delicadeza, lleno de personalidad y suavidad. Ideal para amantes de los mininos.
                </div>
                <div class="card-precio">$52.000</div>
                <a href="#" class="btn-comprar">🛍️ Comprar ahora</a>
            </div>

            {{-- Producto 5: Snoopy --}}
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="{{ asset('img/snoopyCrochet.jpg') }}" alt="Snoopy Crochet">
                </div>
                <div class="card-nombre">🎀 Snoopy Crochet</div>
                <div class="card-descripcion">
                    Snoopy tejido en crochet con delicados moñitos rosados. Un clásico reinventado con ternura y mucho amor.
                </div>
                <div class="card-precio">$48.000</div>
                <a href="#" class="btn-comprar">🛍️ Comprar ahora</a>
            </div>

        </div>

        <div class="btn-agregar-wrapper">
            <a href="{{ url('/product/create') }}" class="btn-agregar">
                ✿ Agregar Producto
            </a>
        </div>

    </section>

</body>
</html>