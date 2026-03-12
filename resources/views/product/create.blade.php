@extends ('layout.app')
@section('content')
    {{-- ENCABEZADO --}}
    <div class="section-header">
        <h1>✿ Añadir Nuevo MiniAmigo ✿</h1>
        <p>Completa los datos para registrar un nuevo producto tejido con amor.</p>
    </div>

    {{-- FORMULARIO --}}
    <div class="form-wrapper">
        <div class="form-card">

            {{-- Flores decorativas --}}
            <div class="corner-deco corner-tl">🌸🌷</div>
            <div class="corner-deco corner-tr">🌷🌸</div>
            <div class="corner-deco corner-bl">🌷🌸</div>
            <div class="corner-deco corner-br">🌸🌷</div>

            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- ID Producto --}}
                <div class="form-group">
                    <label class="form-label" for="id_producto">
                        <span class="icon">🆔</span> ID Producto
                    </label>
                    <input type="text" id="id_producto" name="id_producto" class="form-control" placeholder="Ej: 001" >
                    <p class="form-hint">Identificador único del producto</p>
                </div>

                {{-- Nombre --}}
                <div class="form-group">
                    <label class="form-label" for="nombre">
                        <span class="icon">🧵</span> Nombre
                    </label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej: Conejo Crochet">
                    @error('nombre')
                    <span style="color: red"; font-size: 14px>
                        {{$message}}
                    </span>
                    @enderror
                </div>

                {{-- Precio --}}
                <div class="form-group">
                    <label class="form-label" for="precio">
                        <span class="icon">💰</span> Precio
                    </label>
                    <input type="number" id="precio" name="precio" class="form-control" placeholder="Ej: 50000" min="0" >
                    <p class="form-hint">Ingresa el valor sin puntos ni comas</p>
                    @error('precio')
                    <span style="color: red"; font-size: 14px>
                        {{$message}}
                    </span>
                    @enderror
                </div>

                {{-- Descripción --}}
                <div class="form-group">
                    <label class="form-label" for="descripcion">
                        <span class="icon">📝</span> Descripción
                    </label>
                    <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Describe brevemente el producto…" rows="4" ></textarea>
                    @error('descripcion')
                    <span style="color: red"; font-size: 14px>
                        {{$message}}
                    </span>
                    @enderror
                </div>

                {{-- Imagen --}}
                <div class="form-group">
                    <label class="form-label">
                        <span class="icon">🖼️</span> Imagen
                    </label>
                    <div class="file-input-wrapper">
                        <input type="file" id="imagen" name="imagen" accept="image/*" onchange="mostrarNombreArchivo(this)">
                        <label class="file-input-label" for="imagen">
                            <span class="file-icon">📷</span>
                            <div class="file-text">
                                <strong>Seleccionar imagen</strong>
                                <span>PNG, JPG, WEBP — tamaño recomendado 500×500px</span>
                            </div>
                        </label>
                    </div>
                    <p id="file-name-display">📎 Archivo seleccionado: <span id="file-name"></span></p>
                    @error('imagen')
                    <span style="color: red"; font-size: 14px>
                        {{$message}}
                    </span>
                    @enderror
                </div>

                {{-- Categoria --}}
                <div class="form-group">
                    <label class="form-label" for="estado">
                        <span class="icon">🔄</span> Categoria
                    </label>
                    <select id="estado" name="category" class="form-control">
                        @foreach ($categoryList as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option> 
                        @endforeach
                    </select>
                    @error('categoria')
                    <span style="color: red"; font-size: 14px>
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <hr class="form-divider">

                {{-- Botones --}}
                <div class="form-actions">
                    <button type="submit" class="btn-guardar">🌸 Guardar MiniAmigo</button>
                    <a href="{{ url('/product') }}" class="btn-cancelar">✕ Cancelar</a>
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
@endsection