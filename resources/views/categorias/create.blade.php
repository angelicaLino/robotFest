@extends('layouts.private')

@section('content')
<div class="container-fluid mt-4">
    <h2>Agregar Categoría</h2>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf

        <!-- Nombre -->
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <label>Descripción</label>
            <input type="text" name="descripcion" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
