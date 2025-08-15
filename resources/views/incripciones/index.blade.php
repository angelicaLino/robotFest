@extends('layouts.private')

@section('content')
<div class="container mt-4">
    <h2>Lista de Inscripciones</h2>
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">Nueva Inscripción</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Equipo</th>
                <th>Evento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscripciones as $inscripcion)
                <tr>
                    <td>{{ $inscripcion->id }}</td>
                    <td>{{ $inscripcion->estado }}</td>
                    <td>{{ $inscripcion->fecha }}</td>
                    <td>{{ $inscripcion->equipo->nombre ?? 'Sin equipo' }}</td>
                    <td>{{ $inscripcion->evento->nombre ?? 'Sin evento' }}</td>
                    <td>
                        <a href="{{ route('inscripciones.edit', $inscripcion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('inscripciones.destroy', $inscripcion->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
