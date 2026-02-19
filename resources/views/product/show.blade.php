<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conejo Crochet 🐰 | tusMiniAmigos</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        :root {
            --rosa-claro: #fff0f5;
            --rosa-topbar: #fce4ec;
            --rosa-navbar: #f48fb1;
            --rosa-fuerte: #e91e8c;
            --blanco: #ffffff;
            --texto-oscuro: #5d4037;
            --texto-suave: #9e9e9e;
            --sombra: 0 4px 24px rgba(244, 143, 177, 0.22);
            --sombra-hover: 0 14px 40px rgba(244, 143, 177, 0.42);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--rosa-claro);
            color: var(--texto-oscuro);
            min-height: 100vh;
            background-image:
                radial-gradient(circle at 8% 15%, rgba(252, 228, 236, 0.65) 0%, transparent 45%),
                radial-gradient(circle at 92% 85%, rgba(243, 229, 245, 0.5) 0%, transparent 45%),
                radial-gradient(circle at 50% 50%, rgba(232, 245, 233, 0.25) 0%, transparent 60%);
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

        .topbar .flower {
            display: inline-block;
            font-size: 0.85rem;
            animation: spin-slow 6s linear infinite;
        }

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
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
            text-decoration: none;
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

        .navbar-contact:hover { background: rgba(255,255,255,0.35); }

        /* ─── ENCABEZADO ─── */
        .section-header {
            text-align: center;
            padding: 48px 20px 20px;
            animation: fadeUp 0.5s ease both;
        }

        .section-header h1 {
            font-family: 'Pacifico', cursive;
            font-size: 1.9rem;
            color: #c2185b;
            text-shadow: 1px 1px 0px rgba(255,255,255,0.8);
            margin-bottom: 8px;
        }

        .section-header p {
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--texto-suave);
        }

        /* ─── CONTENEDOR PRINCIPAL ─── */
        .detail-wrapper {
            max-width: 980px;
            margin: 0 auto 24px;
            padding: 0 24px;
            animation: fadeUp 0.55s ease 0.1s both;
        }

        /* ─── CARD PRINCIPAL ─── */
        .detail-card {
            background: var(--blanco);
            border-radius: 28px;
            box-shadow: var(--sombra);
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            position: relative;
        }

        .detail-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 5px;
            background: linear-gradient(90deg, #f48fb1, #ce93d8, #80cbc4, #f48fb1);
            background-size: 200% 100%;
            animation: gradient-slide 4s linear infinite;
            z-index: 2;
        }

        @keyframes gradient-slide {
            0%   { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        /* ─── COLUMNA IZQUIERDA: IMAGEN ─── */
        .detail-image-col {
            background: linear-gradient(160deg, #fff0f5, #fce4ec);
            padding: 50px 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Flores de fondo en la columna imagen */
        .detail-image-col::after {
            content: '🌸 🌷 🌸 🌷 🌸 🌷 🌸 🌷';
            position: absolute;
            font-size: 2.5rem;
            opacity: 0.07;
            white-space: nowrap;
            transform: rotate(-20deg);
            letter-spacing: 12px;
            pointer-events: none;
            top: 30%; left: -10%;
            width: 130%;
        }

        .product-image-frame {
            width: 320px;
            height: 320px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(244, 143, 177, 0.35);
            position: relative;
            z-index: 1;
        }

        .product-image-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            display: block;
        }

        .product-image-frame:hover img {
            transform: scale(1.08);
        }

        /* Badge de estado sobre imagen */
        .badge-estado {
            position: absolute;
            top: 18px;
            left: 18px;
            background: #e8f5e9;
            color: #2e7d32;
            font-size: 0.75rem;
            font-weight: 800;
            padding: 5px 14px;
            border-radius: 50px;
            border: 1.5px solid #a5d6a7;
            z-index: 2;
            letter-spacing: 0.3px;
        }

        /* ─── COLUMNA DERECHA: INFO ─── */
        .detail-info-col {
            padding: 50px 44px 50px 36px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 0;
        }

        .product-tag {
            display: inline-block;
            background: var(--rosa-topbar);
            color: #c2185b;
            font-size: 0.75rem;
            font-weight: 800;
            padding: 4px 14px;
            border-radius: 50px;
            margin-bottom: 14px;
            letter-spacing: 0.5px;
            align-self: flex-start;
        }

        .product-name {
            font-family: 'Pacifico', cursive;
            font-size: 2rem;
            color: var(--texto-oscuro);
            line-height: 1.2;
            margin-bottom: 14px;
        }

        .product-price {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--rosa-fuerte);
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .product-divider {
            border: none;
            border-top: 2px dashed #fce4ec;
            margin-bottom: 20px;
        }

        .product-description {
            font-size: 0.95rem;
            font-weight: 600;
            color: #7d6e66;
            line-height: 1.75;
            margin-bottom: 24px;
        }

        /* ─── BOTONES ─── */
        .detail-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 4px;
        }

        .btn-comprar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #f48fb1, #ec407a);
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.92rem;
            padding: 13px 28px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 6px 18px rgba(236, 64, 122, 0.35);
            transition: transform 0.25s, box-shadow 0.25s, background 0.3s;
        }

        .btn-comprar:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 28px rgba(236, 64, 122, 0.5);
            background: linear-gradient(135deg, #ec407a, #c2185b);
        }

        .btn-volver {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: #9e9e9e;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 13px 22px;
            border-radius: 50px;
            border: 2px solid #f8bbd0;
            cursor: pointer;
            text-decoration: none;
            transition: border-color 0.3s, color 0.3s, background 0.3s;
        }

        .btn-volver:hover {
            border-color: #f48fb1;
            color: #e91e8c;
            background: #fff0f5;
        }

        /* ─── SECCIÓN DETALLES EXTRAS ─── */
        .extras-wrapper {
            max-width: 980px;
            margin: 0 auto 70px;
            padding: 0 24px;
            animation: fadeUp 0.6s ease 0.2s both;
        }

        .extras-card {
            background: var(--blanco);
            border-radius: 24px;
            box-shadow: var(--sombra);
            padding: 32px 40px;
            position: relative;
            overflow: hidden;
        }

        /* Flores de fondo sutiles */
        .extras-card::before {
            content: '🌸 🌷 🌸 🌷 🌸 🌷 🌸 🌷 🌸 🌷 🌸 🌷';
            position: absolute;
            font-size: 3rem;
            opacity: 0.04;
            white-space: nowrap;
            bottom: -10px;
            right: -10px;
            pointer-events: none;
            letter-spacing: 8px;
        }

        .extras-titulo {
            font-family: 'Pacifico', cursive;
            font-size: 1.15rem;
            color: #c2185b;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .extras-titulo::after {
            content: '';
            flex: 1;
            height: 2px;
            background: linear-gradient(to right, rgba(233,30,140,0.25), transparent);
            border-radius: 2px;
        }

        .extras-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .extra-item {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fff9fb;
            border: 1.5px solid #fce4ec;
            border-radius: 16px;
            padding: 16px 18px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .extra-item:hover {
            border-color: #f48fb1;
            box-shadow: 0 4px 16px rgba(244,143,177,0.2);
        }

        .extra-icon {
            font-size: 1.6rem;
            flex-shrink: 0;
        }

        .extra-text strong {
            display: block;
            font-size: 0.85rem;
            font-weight: 800;
            color: var(--texto-oscuro);
            margin-bottom: 2px;
        }

        .extra-text span {
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--texto-suave);
        }

        /* ─── ANIMACIONES ─── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 768px) {
            .detail-card {
                grid-template-columns: 1fr;
            }

            .detail-image-col {
                padding: 36px 24px;
            }

            .product-image-frame {
                width: 260px;
                height: 260px;
            }

            .detail-info-col {
                padding: 32px 24px 36px;
            }

            .product-name { font-size: 1.6rem; }
            .product-price { font-size: 1.8rem; }

            .extras-grid {
                grid-template-columns: 1fr;
            }

            .navbar { padding: 14px 20px; }
            .navbar-brand { font-size: 1.3rem; }
            .navbar-contact { font-size: 0.85rem; padding: 6px 12px; }
            .section-header h1 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>

    {{-- ─── TOPBAR ─── --}}
    <div class="topbar">
        <span>
            <span class="flower">✿</span>
            Hecho a mano con amor
            <span class="flower">✿</span>
            Envíos a todo el país
            <span class="flower">✿</span>
        </span>
    </div>

    {{-- ─── NAVBAR ─── --}}
    <nav class="navbar">
        <a href="{{ url('/') }}" class="navbar-brand">🧸 tusMiniAmigos</a>
        <a href="tel:3162273844" class="navbar-contact">📱 316 227 3844</a>
    </nav>

    {{-- ─── ENCABEZADO ─── --}}
    <div class="section-header">
        <h1>✿ Detalle del MiniAmigo ✿</h1>
        <p>Conoce cada detalle de este tejido especial 💕</p>
    </div>

    {{-- ─── CARD PRINCIPAL ─── --}}
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

    {{-- ─── DETALLES EXTRAS ─── --}}
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

</body>
</html>