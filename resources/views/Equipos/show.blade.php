@extends('layouts.private')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Detalles del Equipo</h3>
        <p><strong>Nro:</strong> {{ $equipo->nro }}</p>
        <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
        <p><strong>Categoría:</strong> {{ $equipo->categoria }}</p>
        <p><strong>Miembros:</strong> {{ $equipo->miembros }}</p> 
        <p><strong>Evento:</strong> {{ $equipo->evento }}</p>
        <p><strong>Estado:</strong> {{ ucfirst($equipo->estado) }}</p>

        <a href="{{ route('equipos.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</div>
@endsection


