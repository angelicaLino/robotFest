@extends('layouts.private')

@section('content')
<div class="container mt-4">
    <h2>Agregar Equipo</h2>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf

        <!-- Nombre del equipo -->
        <div class="mb-3">
            <label>Nombre del Equipo</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <!-- Categoría -->
        <div class="mb-3">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control" required>
                <option value="">-- Selecciona una categoría --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Integrantes -->
        <div class="mb-3">
            <label>Integrantes</label>
            <select name="integrantes[]" class="form-control" multiple required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
            </select>
            <small class="text-muted">Mantén presionada la tecla Ctrl (o Cmd en Mac) para seleccionar varios usuarios.</small>
        </div>

        <button class="btn btn-success">Guardar Equipo</button>
    </form>
</div>
@endsection
