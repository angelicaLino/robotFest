@extends('layouts.private')

@section('content')
<div class="container">
    <h3>Editar Competencia</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('competencias.update', $competencia->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Nombre --}}
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Competencia</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $competencia->nombre) }}" required>
        </div>

        {{-- Descripción --}}
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion', $competencia->descripcion) }}</textarea>
        </div>

        {{-- Evento --}}
        <div class="mb-3">
            <label for="evento_id" class="form-label">Evento</label>
            <select name="evento_id" id="evento_id" class="form-select" required>
                <option value="">-- Seleccionar Evento --</option>
                @foreach ($eventos as $evento)
                    <option value="{{ $evento->id }}" {{ old('evento_id', $competencia->evento_id) == $evento->id ? 'selected' : '' }}>
                        {{ $evento->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Categoría --}}
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría</label>
            <select name="categoria_id" id="categoria_id" class="form-select" required>
                <option value="">-- Seleccionar Categoría --</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" data-nombre="{{ $categoria->nombre }}"
                        {{ old('categoria_id', $competencia->categoria_id) == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Estado --}}
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select">
                <option value="activo" {{ old('estado', $competencia->estado) == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ old('estado', $competencia->estado) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        {{-- Parámetro fijo: Nro de intentos (solo Seguidor de Línea) --}}
        <div class="mb-3" id="parametro-intentos-container" style="display:none;">
            <label for="parametro_intentos" class="form-label">Número de Intentos</label>
            <input type="number" name="parametros[0][valor]" id="parametro_intentos" class="form-control" 
                value="{{ old('parametros.0.valor', $parametroIntentos->valor ?? 5) }}" min="1">
            <input type="hidden" name="parametros[0][nombre]" value="Nro de intentos">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Competencia</button>
        <a href="{{ route('competencias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoriaSelect = document.getElementById('categoria_id');
        const parametroContainer = document.getElementById('parametro-intentos-container');

        function toggleParametro() {
            const selectedOption = categoriaSelect.options[categoriaSelect.selectedIndex];
            const categoriaNombre = selectedOption.dataset.nombre;

            if(categoriaNombre === 'Seguidor de Linea'){
                parametroContainer.style.display = 'block';
            } else {
                parametroContainer.style.display = 'none';
            }
        }

        toggleParametro();
        categoriaSelect.addEventListener('change', toggleParametro);
    });
</script>
@endsection
