@extends('layouts.private')

@section('content')
<div class="container">
    <h2>Editar evento</h2>

    <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nombre -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $evento->nombre) }}" required>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required>{{ old('descripcion', $evento->descripcion) }}</textarea>
        </div>

        <!-- Fecha -->
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $evento->fecha) }}" required>
        </div>

        <!-- Lugar -->
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Lugar</label>
            <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion', $evento->ubicacion) }}" required>
        </div>

        <!-- Categorías -->
        <div class="mb-3">
            <label for="categorias" class="form-label">Categorías</label>
            <select name="categorias[]" class="form-select" multiple required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ in_array($categoria->id, $evento->categorias->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
            <small class="text-muted">Mantén presionada la tecla CTRL (Windows) o CMD (Mac) para seleccionar varias.</small>
        </div>

        <!-- Estado -->
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="activo" {{ old('estado', $evento->estado) == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ old('estado', $evento->estado) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                <option value="suspendido" {{ old('estado', $evento->estado) == 'suspendido' ? 'selected' : '' }}>Suspendido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('eventos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
