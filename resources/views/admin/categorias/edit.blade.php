@extends('layout.admin')

@section('admin-title', 'Editar categoría')

@section('admin-content')

    <section class="admin-form-header">
        <div>
            <h2 class="admin-form-title">Editar categoría ✨</h2>
            <p class="admin-form-subtitle">
                Actualiza la información de esta colección para mantener organizado tu catálogo.
            </p>
        </div>
    </section>

    <section class="admin-form-wrapper">
        <div class="admin-form-card">
            <form action="{{ route('admin.categorias.update', $category) }}" method="POST" class="admin-soft-form">
                @csrf
                @method('PUT')

                <div class="admin-form-group">
                    <label for="name" class="admin-form-label">Nombre</label>
                    <input 
                        type="text" 
                        id="name"
                        name="name" 
                        class="admin-form-input"
                        value="{{ old('name', $category->name) }}"
                        placeholder="Ej. Ositos tiernos"
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
                        placeholder="Describe esta categoría de forma clara y bonita..."
                    >{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p class="admin-form-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="admin-form-actions">
                    <a href="{{ route('admin.categorias') }}" class="admin-cancel-btn">
                        Cancelar
                    </a>

                    <button type="submit" class="admin-save-btn">
                        Actualizar categoría
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection