@extends ('layout.app')
@section('content') 
    {{-- NAVBAR --}}
    <nav class="navbar">
        <a href="{{ url('/') }}" class="navbar-brand">🧸 tusMiniAmigos</a>
        <a href="tel:3162273844" class="navbar-contact">📱 316 227 3844</a>
    </nav>
 
    {{-- ══════════════ HERO ══════════════ --}}
    <section class="hero-landing">
        <div class="hero-content">
            <span class="hero-badge">✿ Tejidos con amor ✿</span>
            <h1 class="hero-title">Mini amigos tejidos<br>con amor 💗</h1>
            <p class="hero-subtitle">Detalles únicos que llenan de ternura cada momento</p>
            <a href="{{ url('/product') }}" class="btn-hero">🛍️ Ver productos</a>
        </div>
        <div class="hero-image-col">
            <div class="hero-image-frame">
                <img src="{{ asset('img/imagenInicio.jpg') }}" alt="tusMiniAmigos peluche tejido">
                <div class="hero-image-deco top">🌸</div>
                <div class="hero-image-deco bottom">🌷</div>
            </div>
            <div class="hero-blob"></div>
        </div>
    </section>
 
    {{-- ══════════════ SOBRE NOSOTROS ══════════════ --}}
    <section class="sobre-section">
        <div class="sobre-inner">
            <div class="sobre-icon-col">
                <div class="sobre-icon-ring">🧶</div>
            </div>
            <div class="sobre-text-col">
                <p class="sobre-eyebrow">✿ Nuestra historia</p>
                <h2 class="sobre-title">Cada pieza, una historia de amor</h2>
                <p class="sobre-body">
                    En <strong>tusMiniAmigos</strong> cada peluche nace de nuestras manos con paciencia,
                    dedicación y muchísimo cariño. Usamos materiales suaves y de calidad para crear
                    compañeros únicos que llevan consigo una pequeña dosis de ternura.
                    Porque creemos que los mejores regalos son los que se hacen con el corazón. 💕
                </p>
            </div>
        </div>
    </section>
 
    {{-- ══════════════ BENEFICIOS ══════════════ --}}
    <section class="beneficios-section">
        <div class="beneficios-inner">
            <p class="section-eyebrow">✿ ¿Por qué elegirnos?</p>
            <h2 class="section-title">Todo tejido con propósito</h2>
 
            <div class="beneficios-grid">
 
                <div class="beneficio-card">
                    <div class="beneficio-icon">🤲</div>
                    <h3>Hecho a mano</h3>
                    <p>Cada pieza es elaborada artesanalmente, punto a punto, con dedicación y amor.</p>
                </div>
 
                <div class="beneficio-card destacado">
                    <div class="beneficio-icon">🧶</div>
                    <h3>Materiales suaves</h3>
                    <p>Usamos hilos de alta calidad, suaves al tacto y seguros para todas las edades.</p>
                </div>
 
                <div class="beneficio-card">
                    <div class="beneficio-icon">🎁</div>
                    <h3>Perfecto para regalo</h3>
                    <p>Ideal para cumpleaños, baby showers, San Valentín o simplemente sorprender a alguien especial.</p>
                </div>
 
            </div>
        </div>
    </section>
 
@endsection