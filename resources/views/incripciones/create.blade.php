@extends('layouts.private')

@section('content')
<div class="container mt-4">
    <h2>Nueva Inscripción</h2>
    <form action="{{ route('inscripciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Equipo</label>
            <select name="equipo_id" class="form-control" required>
                <option value="">Seleccione un equipo</option>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Evento</label>
            <select name="evento_id" class="form-control">
                <option value="">Seleccione un evento</option>
                @foreach($eventos as $evento)
                    <option value="{{ $evento->id }}">{{ $evento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
