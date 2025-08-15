@extends('layouts.private')

@section('content')
<div class="container mt-4">
    <h2>Editar Inscripción</h2>
    <form action="{{ route('inscripciones.update', $inscripcion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ $inscripcion->estado }}" required>
        </div>

        <div class="mb-3">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $inscripcion->fecha }}" required>
        </div>

        <div class="mb-3">
            <label>Equipo</label>
            <select name="equipo_id" class="form-control" required>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ $inscripcion->equipo_id == $equipo->id ? 'selected' : '' }}>{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Evento</label>
            <select name="evento_id" class="form-control">
                <option value="">Seleccione un evento</option>
                @foreach($eventos as $evento)
                    <option value="{{ $evento->id }}" {{ $inscripcion->evento_id == $evento->id ? 'selected' : '' }}>{{ $evento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
