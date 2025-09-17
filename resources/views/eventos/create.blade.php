@extends('layouts.private')

@section('content')
<div class="container">
    <h2>Crear nuevo evento</h2>

    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf

        <!-- Nombre -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
        </div>

        <!-- Fecha -->
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>

        <!-- Lugar -->
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Lugar</label>
            <input type="text" name="ubicacion" class="form-control" required>
        </div>

        <!-- Categorías -->
        <div class="mb-3">
            <label for="categorias" class="form-label">Categorías</label>
            <select name="categorias[]" class="form-select" multiple required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            <small class="text-muted">Mantén presionada la tecla CTRL (Windows) o CMD (Mac) para seleccionar varias.</small>
        </div>

        <!-- Estado -->
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                <option value="suspendido">Suspendido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('eventos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
