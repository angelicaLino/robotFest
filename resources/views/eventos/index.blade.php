@extends('layouts.private')

@section('content')

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li>
                    <a href="{{ route('dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Panel
                        Principal</a>
                </li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>

                <li><span class="text-main-600 fw-normal text-15">Eventos</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <a href="{{ route('eventos.create') }}"
                class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                <i class="ph ph-plus me-4"></i>
                Agregar Evento
            </a>
        </div>
        <!-- Breadcrumb Right End -->
    </div>

    {{-- Mensaje de error --}}
    @if (session('error'))
        <div class="bg-danger-200 rounded-16 p-12 flex-between flex-wrap gap-8 mb-16">
            <div class="flex-align gap-16">
                <span class="w-20 h-20 rounded-5 flex-center  bg-danger-600 text-white"><i class="ph ph-x"></i></span>
                <h5 class="mb-0 fw-medium text-danger-600">{{ session('error') }}</h5>
            </div>
        </div>
    @endif

    {{-- Mensaje de éxito --}}
    @if (session('success'))
        <div class="bg-success-200 rounded-16 p-12 flex-between flex-wrap gap-8 mb-16">
            <div class="flex-align gap-16">
                <span class="w-20 h-20 rounded-5 flex-center  bg-success-600 text-white"><i class="ph ph-check"></i></span>
                <h5 class="mb-0 fw-medium text-success-600">{{ session('success') }}</h5>
            </div>
        </div>
    @endif

    <div class="card overflow-hidden">
        <div class="card-body overflow-x-auto">
            <table id="dataTable" class="table table-striped align-middle mb-0 mt-5">
                <thead class="bg-light">
                    <tr>
                        <th class="fw-semibold text-gray-600">Nro.</th>
                        <th class="fw-semibold text-gray-600">Nombre</th>
                        <th class="fw-semibold text-gray-600">Descripción</th>
                        <th class="fw-semibold text-gray-600">Fecha</th>
                        <th class="fw-semibold text-gray-600">Lugar</th>
                        <th class="fw-semibold text-gray-600">Categorías</th>
                        <th class="fw-semibold text-gray-600">Estado</th>
                        <th class="fw-semibold text-gray-600">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td><span class="h6 mb-0 fw-medium text-gray-700">{{ $loop->iteration }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-700">{{ $evento->nombre }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-700">{{ $evento->descripcion }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-700">{{ $evento->fecha->format('d/m/Y') }}</span></td>
                            <td><span class="h6 mb-0 fw-medium text-gray-700">{{ $evento->ubicacion }}</span></td>
                            <td>
                                @foreach ($evento->categorias as $categoria)
                                    <span class="badge bg-primary text-white">{{ $categoria->nombre }}</span>
                                @endforeach
                            </td>
                            <td>
                                @php
                                    $estado = $evento->estado;
                                    $clases = match ($estado) {
                                        'activo' => 'bg-success-50 text-success-600',
                                        'inactivo' => 'bg-warning-50 text-warning-600',
                                        'eliminado' => 'bg-danger-50 text-danger-600',
                                        default => 'bg-secondary text-white',
                                    };
                                @endphp
                                <span
                                    class="text-13 py-6 px-10 fw-bold {{ $clases }} d-inline-flex align-items-center gap-8 rounded-pill">
                                    {{ ucfirst($estado) }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start gap-2">
                                    <a href="{{ route('eventos.edit', $evento) }}"
                                        class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                        <i class="ph ph-pencil me-4"></i>
                                        Editar
                                    </a>
                                    <form action="{{ route('eventos.destroy', $evento) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2"
                                            onclick="return confirm('¿Estás seguro de eliminar este evento?')">
                                            <i class="ph ph-trash me-4"></i>
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
