@extends('layout.admin')

@section('admin-title', 'Crear categoría')

@section('admin-content')

    <section class="admin-form-header">
        <div>
            <h2 class="admin-form-title">Crear categoría 🌸</h2>
            <p class="admin-form-subtitle">
                Agrega una nueva colección para organizar tus mini amigos tejidos.
            </p>
        </div>
    </section>

    <section class="admin-form-wrapper">
        <div class="admin-form-card">
            <form action="{{ route('admin.categorias.store') }}" method="POST" class="admin-soft-form">
                @csrf

                <div class="admin-form-group">
                    <label for="name" class="admin-form-label">Nombre</label>
                    <input 
                        type="text" 
                        id="name"
                        name="name" 
                        class="admin-form-input"
                        value="{{ old('name') }}"
                        placeholder="Ej. Animalitos del bosque"
                    >
                    @error('name')
                        <p class="admin-form-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="admin-form-group">
                    <label for="description" class="admin-form-label">Descripción</label>
                    <textarea 
                        id="description"
                        name="description" 
                        class="admin-form-textarea"
                        placeholder="Describe esta categoría con un tono bonito y claro..."
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="admin-form-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="admin-form-actions">
                    <a href="{{ route('admin.categorias') }}" class="admin-cancel-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="admin-save-btn">
                        Guardar categoría
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection