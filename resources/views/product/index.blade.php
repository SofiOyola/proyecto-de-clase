<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tusMiniAmigos 🌸</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        :root {
            --rosa-claro: #fff0f5;
            --rosa-topbar: #fce4ec;
            --rosa-navbar: #f48fb1;
            --rosa-fuerte: #e91e8c;
            --rosa-boton: #f06292;
            --lila: #f3e5f5;
            --menta: #e8f5e9;
            --blanco: #ffffff;
            --texto-oscuro: #5d4037;
            --texto-suave: #9e9e9e;
            --sombra: 0 4px 20px rgba(244, 143, 177, 0.25);
            --sombra-hover: 0 12px 32px rgba(244, 143, 177, 0.45);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--rosa-claro);
            color: var(--texto-oscuro);
            background-image:
                radial-gradient(circle at 10% 20%, rgba(252, 228, 236, 0.5) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(243, 229, 245, 0.4) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(232, 245, 233, 0.3) 0%, transparent 60%);
        }

        /* ─── TOPBAR ─── */
        .topbar {
            background-color: var(--rosa-topbar);
            text-align: center;
            padding: 8px 20px;
            font-size: 0.78rem;
            font-weight: 600;
            color: #c2185b;
            letter-spacing: 0.5px;
            border-bottom: 1px solid rgba(244, 143, 177, 0.3);
        }

        .topbar span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .topbar .flower {
            font-size: 0.85rem;
            animation: spin-slow 6s linear infinite;
        }

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* ─── NAVBAR ─── */
        .navbar {
            background: linear-gradient(135deg, #f48fb1 0%, #f06292 50%, #ec407a 100%);
            padding: 16px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(236, 64, 122, 0.3);
        }

        .navbar-brand {
            font-family: 'Pacifico', cursive;
            font-size: 1.7rem;
            color: white;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.15);
            letter-spacing: 1px;
        }

        .navbar-brand span {
            font-size: 1.2rem;
        }

        .navbar-contact {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            font-weight: 700;
            font-size: 1rem;
            background: rgba(255,255,255,0.2);
            padding: 8px 18px;
            border-radius: 50px;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255,255,255,0.3);
            text-decoration: none;
            transition: background 0.3s;
        }

        .navbar-contact:hover {
            background: rgba(255,255,255,0.35);
        }

        /* ─── HERO ─── */
        .hero {
            text-align: center;
            padding: 50px 20px 30px;
        }

        .hero h1 {
            font-family: 'Pacifico', cursive;
            font-size: 2rem;
            color: #c2185b;
            margin-bottom: 10px;
            text-shadow: 1px 1px 0px rgba(255,255,255,0.8);
        }

        .hero p {
            color: #9e9e9e;
            font-size: 1rem;
            font-weight: 600;
        }

        /* ─── SECCIÓN PRODUCTOS ─── */
        .productos-section {
            padding: 20px 30px 60px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .productos-titulo {
            font-family: 'Pacifico', cursive;
            font-size: 1.4rem;
            color: #e91e8c;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .productos-titulo::after {
            content: '';
            flex: 1;
            height: 2px;
            background: linear-gradient(to right, rgba(233, 30, 140, 0.3), transparent);
            border-radius: 2px;
        }

        /* ─── SCROLL HORIZONTAL ─── */
        .productos-scroll {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            padding-bottom: 20px;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
            scrollbar-color: #f48fb1 #fce4ec;
        }

        .productos-scroll::-webkit-scrollbar {
            height: 6px;
        }

        .productos-scroll::-webkit-scrollbar-track {
            background: var(--rosa-topbar);
            border-radius: 10px;
        }

        .productos-scroll::-webkit-scrollbar-thumb {
            background: var(--rosa-navbar);
            border-radius: 10px;
        }

        /* ─── CARD ─── */
        .card {
            background: var(--blanco);
            border-radius: 24px;
            box-shadow: var(--sombra);
            padding: 20px;
            min-width: 230px;
            max-width: 230px;
            scroll-snap-align: start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f48fb1, #ce93d8, #80cbc4);
            border-radius: 24px 24px 0 0;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--sombra-hover);
        }

        .card-img-wrapper {
            width: 160px;
            height: 160px;
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 14px;
            background: var(--rosa-topbar);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .card:hover .card-img-wrapper img {
            transform: scale(1.07);
        }

        .card-nombre {
            font-size: 1rem;
            font-weight: 800;
            color: var(--texto-oscuro);
            margin-bottom: 6px;
        }

        .card-descripcion {
            font-size: 0.78rem;
            color: #9e9e9e;
            line-height: 1.5;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .card-precio {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--rosa-fuerte);
            margin-bottom: 14px;
            letter-spacing: -0.5px;
        }

        .btn-comprar {
            display: inline-block;
            background: linear-gradient(135deg, #f48fb1, #ec407a);
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.82rem;
            padding: 10px 22px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s, background 0.3s;
            box-shadow: 0 4px 14px rgba(236, 64, 122, 0.35);
            letter-spacing: 0.3px;
        }

        .btn-comprar:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(236, 64, 122, 0.5);
            background: linear-gradient(135deg, #ec407a, #c2185b);
        }

        /* ─── DECORACIONES FLORALES ─── */
        .deco-flores {
            position: fixed;
            pointer-events: none;
            opacity: 0.12;
            font-size: 1.5rem;
            z-index: 0;
        }

        .deco-tl { top: 80px; left: 20px; }
        .deco-tr { top: 80px; right: 20px; }
        .deco-bl { bottom: 40px; left: 20px; }
        .deco-br { bottom: 40px; right: 20px; }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 600px) {
            .navbar {
                padding: 14px 20px;
            }
            .navbar-brand {
                font-size: 1.3rem;
            }
            .navbar-contact {
                font-size: 0.85rem;
                padding: 6px 12px;
            }
            .hero h1 {
                font-size: 1.5rem;
            }
            .productos-section {
                padding: 20px 16px 50px;
            }
        }

        .btn-agregar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #ce93d8, #ab47bc);
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.95rem;
            padding: 14px 36px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 6px 18px rgba(171, 71, 188, 0.3);
            transition: transform 0.25s, box-shadow 0.25s, background 0.3s;
            letter-spacing: 0.3px;
        }

        .btn-agregar:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 28px rgba(171, 71, 188, 0.45);
            background: linear-gradient(135deg, #ab47bc, #7b1fa2);
        }

        /* ─── FADE IN ─── */
        .card {
            animation: fadeUp 0.5s ease both;
        }
        .card:nth-child(1) { animation-delay: 0.05s; }
        .card:nth-child(2) { animation-delay: 0.12s; }
        .card:nth-child(3) { animation-delay: 0.19s; }
        .card:nth-child(4) { animation-delay: 0.26s; }
        .card:nth-child(5) { animation-delay: 0.33s; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
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
        <div class="navbar-brand">
            <span>🧸</span> tusMiniAmigos
        </div>
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

        <div style="text-align: center; margin-top: 36px;">
            <a href="{{ url('/product/create') }}" class="btn-agregar">
                ✿ Agregar Producto
            </a>
        </div>

    </section>

</body>
</html>