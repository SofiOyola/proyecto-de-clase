<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir MiniAmigo 🌸 | tusMiniAmigos</title>
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
            --texto-suave: #bdbdbd;
            --sombra: 0 4px 24px rgba(244, 143, 177, 0.22);
            --sombra-hover: 0 10px 36px rgba(244, 143, 177, 0.42);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--rosa-claro);
            color: var(--texto-oscuro);
            min-height: 100vh;
            background-image:
                radial-gradient(circle at 10% 20%, rgba(252, 228, 236, 0.6) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(243, 229, 245, 0.5) 0%, transparent 50%),
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
            letter-spacing: 1px;
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

        /* ─── HEADER DE SECCIÓN ─── */
        .section-header {
            text-align: center;
            padding: 48px 20px 24px;
            animation: fadeUp 0.5s ease both;
        }

        .section-header h1 {
            font-family: 'Pacifico', cursive;
            font-size: 1.9rem;
            color: #c2185b;
            text-shadow: 1px 1px 0px rgba(255,255,255,0.8);
            margin-bottom: 10px;
        }

        .section-header p {
            font-size: 0.92rem;
            font-weight: 600;
            color: #9e9e9e;
        }

        /* ─── CARD DEL FORMULARIO ─── */
        .form-wrapper {
            max-width: 560px;
            margin: 0 auto 70px;
            padding: 0 20px;
            animation: fadeUp 0.55s ease 0.1s both;
        }

        .form-card {
            background: var(--blanco);
            border-radius: 28px;
            box-shadow: var(--sombra);
            padding: 40px 36px;
            position: relative;
            overflow: hidden;
        }

        /* Barra superior decorativa */
        .form-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 5px;
            background: linear-gradient(90deg, #f48fb1, #ce93d8, #80cbc4, #f48fb1);
            background-size: 200% 100%;
            animation: gradient-slide 4s linear infinite;
        }

        @keyframes gradient-slide {
            0%   { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        /* Flores decorativas en esquinas */
        .corner-deco {
            position: absolute;
            font-size: 1.5rem;
            opacity: 0.18;
            pointer-events: none;
        }
        .corner-tl { top: 16px; left: 16px; }
        .corner-tr { top: 16px; right: 16px; transform: scaleX(-1); }
        .corner-bl { bottom: 16px; left: 16px; }
        .corner-br { bottom: 16px; right: 16px; transform: scaleX(-1); }

        /* ─── CAMPOS ─── */
        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 800;
            color: #c2185b;
            margin-bottom: 6px;
            letter-spacing: 0.3px;
        }

        .form-label .icon {
            margin-right: 5px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #fce4ec;
            border-radius: 14px;
            font-family: 'Nunito', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--texto-oscuro);
            background: #fff9fb;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        .form-control::placeholder {
            color: var(--texto-suave);
            font-weight: 600;
        }

        .form-control:focus {
            border-color: var(--rosa-navbar);
            box-shadow: 0 0 0 4px rgba(244, 143, 177, 0.15);
            background: #ffffff;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        select.form-control {
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23f48fb1' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            cursor: pointer;
        }

        .form-hint {
            font-size: 0.73rem;
            color: #bdbdbd;
            font-weight: 600;
            margin-top: 5px;
            padding-left: 4px;
        }

        /* ─── INPUT FILE PERSONALIZADO ─── */
        .file-input-wrapper {
            position: relative;
        }

        .file-input-wrapper input[type="file"] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            top: 0; left: 0;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border: 2px dashed #f48fb1;
            border-radius: 14px;
            background: #fff5f8;
            cursor: pointer;
            transition: border-color 0.3s, background 0.3s;
        }

        .file-input-label:hover {
            border-color: #e91e8c;
            background: #fce4ec;
        }

        .file-icon {
            font-size: 1.6rem;
        }

        .file-text {
            display: flex;
            flex-direction: column;
        }

        .file-text strong {
            font-size: 0.87rem;
            font-weight: 800;
            color: #c2185b;
        }

        .file-text span {
            font-size: 0.73rem;
            color: #bdbdbd;
            font-weight: 600;
        }

        #file-name-display {
            font-size: 0.75rem;
            color: var(--rosa-fuerte);
            font-weight: 700;
            margin-top: 5px;
            padding-left: 4px;
            display: none;
        }

        /* ─── DIVISOR ─── */
        .form-divider {
            border: none;
            border-top: 2px dashed #fce4ec;
            margin: 28px 0;
        }

        /* ─── BOTONES ─── */
        .form-actions {
            display: flex;
            gap: 14px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 8px;
        }

        .btn-guardar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #f48fb1, #ec407a);
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 0.95rem;
            padding: 13px 32px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            box-shadow: 0 6px 18px rgba(236, 64, 122, 0.35);
            transition: transform 0.25s, box-shadow 0.25s, background 0.3s;
            letter-spacing: 0.3px;
        }

        .btn-guardar:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 28px rgba(236, 64, 122, 0.5);
            background: linear-gradient(135deg, #ec407a, #c2185b);
        }

        .btn-guardar:active {
            transform: scale(0.97);
        }

        .btn-cancelar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: #9e9e9e;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 13px 24px;
            border-radius: 50px;
            border: 2px solid #f8bbd0;
            cursor: pointer;
            text-decoration: none;
            transition: border-color 0.3s, color 0.3s, background 0.3s;
        }

        .btn-cancelar:hover {
            border-color: #f48fb1;
            color: #e91e8c;
            background: #fff0f5;
        }

        /* ─── ANIMACIONES ─── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 600px) {
            .navbar { padding: 14px 20px; }
            .navbar-brand { font-size: 1.3rem; }
            .navbar-contact { font-size: 0.85rem; padding: 6px 12px; }
            .form-card { padding: 28px 20px; }
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
        <h1>✿ Añadir Nuevo MiniAmigo ✿</h1>
        <p>Completa los datos para registrar un nuevo producto tejido con amor.</p>
    </div>

    {{-- ─── FORMULARIO ─── --}}
    <div class="form-wrapper">
        <div class="form-card">

            {{-- Flores decorativas --}}
            <div class="corner-deco corner-tl">🌸🌷</div>
            <div class="corner-deco corner-tr">🌷🌸</div>
            <div class="corner-deco corner-bl">🌷🌸</div>
            <div class="corner-deco corner-br">🌸🌷</div>

                {{-- ID Producto --}}
                <div class="form-group">
                    <label class="form-label" for="id_producto">
                         ID Producto
                    </label>
                    <input
                        type="text"
                        id="id_producto"
                        name="id_producto"
                        class="form-control"
                        placeholder="Ej: 001"
                        required
                    >
                    <p class="form-hint">Identificador único del producto</p>
                </div>

                {{-- Nombre --}}
                <div class="form-group">
                    <label class="form-label" for="nombre">
                        Nombre
                    </label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                        placeholder="Ej: Conejo Crochet"
                        required
                    >
                </div>

                {{-- Precio --}}
                <div class="form-group">
                    <label class="form-label" for="precio">
                        Precio
                    </label>
                    <input
                        type="number"
                        id="precio"
                        name="precio"
                        class="form-control"
                        placeholder="Ej: 50000"
                        min="0"
                        required
                    >
                    <p class="form-hint">Ingresa el valor sin puntos ni comas</p>
                </div>

                {{-- Descripción --}}
                <div class="form-group">
                    <label class="form-label" for="descripcion">
                        Descripción
                    </label>
                    <textarea
                        id="descripcion"
                        name="descripcion"
                        class="form-control"
                        placeholder="Describe brevemente el producto…"
                        rows="4"
                        required
                    ></textarea>
                </div>

                {{-- Imagen --}}
                <div class="form-group">
                    <label class="form-label">
                         Imagen
                    </label>
                    <div class="file-input-wrapper">
                        <input
                            type="file"
                            id="imagen"
                            name="imagen"
                            accept="image/*"
                            onchange="mostrarNombreArchivo(this)"
                        >
                        <label class="file-input-label" for="imagen">
                            <span class="file-icon">📷</span>
                            <div class="file-text">
                                <strong>Seleccionar imagen</strong>
                                <span>PNG, JPG, WEBP — tamaño recomendado 500×500px</span>
                            </div>
                        </label>
                    </div>
                    <p id="file-name-display">📎 Archivo seleccionado: <span id="file-name"></span></p>
                </div>

                {{-- Estado --}}
                <div class="form-group">
                    <label class="form-label" for="estado">
                        Estado
                    </label>
                    <select id="estado" name="estado" class="form-control" required>
                        <option value="" disabled selected>Selecciona el estado…</option>
                        <option value="disponible">✅ Disponible</option>
                        <option value="agotado">❌ Agotado</option>
                        <option value="proximamente">🕐 Próximamente</option>
                    </select>
                </div>

                <hr class="form-divider">

                {{-- Botones --}}
                <div class="form-actions">
                    <button type="submit" class="btn-guardar">
                        🌸 Guardar MiniAmigo
                    </button>
                    <a href="{{ url('/product') }}" class="btn-cancelar">
                        ✕ Cancelar
                    </a>
                </div>

            </form>
        </div>
    </div>

    <script>
        function mostrarNombreArchivo(input) {
            const display = document.getElementById('file-name-display');
            const nameSpan = document.getElementById('file-name');
            if (input.files && input.files[0]) {
                nameSpan.textContent = input.files[0].name;
                display.style.display = 'block';
            } else {
                display.style.display = 'none';
            }
        }
    </script>

</body>
</html>