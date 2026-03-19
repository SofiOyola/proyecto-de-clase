@extends('layout.admin')

@section('admin-title', 'Categorías')

@section('admin-content')

    <section class="admin-categories-header">
        <div>
            <h2 class="admin-categories-title">Categorías 🌸</h2>
            <p class="admin-categories-subtitle">
                Organiza tus mini amigos por colecciones o tipos de peluches.
            </p>
        </div>

        <a href="{{ route('admin.categorias.create') }}" class="admin-add-btn">
            + Nueva categoría
        </a>
    </section>

    @if(session('error'))
        <div class="admin-alert admin-alert-error">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="admin-alert admin-alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="admin-categories-list">
        @foreach($categoryList as $category)
            <article class="admin-category-card">
                <div class="admin-category-content">
                    <h3 class="admin-category-name">{{ $category->name }}</h3>
                    <p class="admin-category-description">{{ $category->description }}</p>
                </div>

                <div class="admin-category-actions">
                    <a href="{{ route('admin.categorias.edit', $category) }}" class="admin-mini-btn secondary">
                        Editar
                    </a>

                    <form action="{{ route('admin.categorias.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="admin-mini-btn danger">
                            Eliminar
                        </button>
                    </form>
                </div>
            </article>
        @endforeach
    </section>

@endsection