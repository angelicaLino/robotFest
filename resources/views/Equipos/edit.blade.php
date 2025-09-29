@extends('layouts.private')

@section('content')
<div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ route('dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Panel Principal</a></li>
            <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
            <li><span class="text-main-600 fw-normal text-15">Equipos</span></li>
        </ul>
    </div>

    <div class="d-flex align-items-center gap-2 flex-wrap">
        <a href="{{ route('equipos.create') }}" class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
            <i class="ph ph-plus me-4"></i> Agregar Equipo
        </a>
    </div>
</div>

{{-- Mensajes --}}
@if(session('success'))
<div class="bg-success-200 rounded-16 p-12 mb-16">
    <h5 class="mb-0 fw-medium text-success-600">{{ session('success') }}</h5>
</div>
@endif

<div class="card overflow-hidden">
    <div class="card-body overflow-x-auto">
        <table class="table table-striped align-middle mb-0 mt-5">
            <thead class="bg-light">
                <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Miembros</th>
                    <th>Evento</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->nro }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->categoria }}</td>
                    <td>{{ $equipo->miembros }}</td>
                    <td>{{ $equipo->evento }}</td>
                    <td>
                        @php
                            $clases = match($equipo->estado){
                                'activo' => 'bg-success-50 text-success-600',
                                'inactivo' => 'bg-warning-50 text-warning-600',
                                'eliminado' => 'bg-danger-50 text-danger-600',
                                default => 'bg-secondary text-white',
                            };
                        @endphp
                        <span class="text-13 py-6 px-10 fw-bold {{ $clases }} d-inline-flex align-items-center gap-8 rounded-pill">{{ ucfirst($equipo->estado) }}</span>
                    </td>
                    <td class="d-flex gap-2">
                        @if($equipo->estado === 'eliminado')
                            <form action="{{ route('equipos.restore', $equipo) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurar</button>
                            </form>
                            <form action="{{ route('equipos.deletePermanent', $equipo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar Permanentemente</button>
                            </form>
                        @else
                            <a href="{{ route('equipos.edit', $equipo) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('equipos.destroy', $equipo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
