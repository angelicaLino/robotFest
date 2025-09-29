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

                <li><span class="text-main-600 fw-normal text-15">Inscripciones</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <a href="{{ route('inscripciones.create') }}"
                class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                <i class="ph ph-plus me-4"></i>
                Agregar Inscripción
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
                        <th class="fw-semibold text-gray-600">Nombre Equipo</th>
                        <th class="fw-semibold text-gray-600">Participantes</th>
                        <th class="fw-semibold text-gray-600">Categoría</th>
                        <th class="fw-semibold text-gray-600">Competencia</th>
                        <th class="fw-semibold text-gray-600">Estado</th>
                        <th class="fw-semibold text-gray-600">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inscripciones as $inscripcion)
                        <tr>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $inscripcion->id }}</span>
                            </td>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $inscripcion->nombre_equipo }}</span>
                            </td>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $inscripcion->participantes }}</span>
                            </td>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $inscripcion->categoria->nombre }}</span>
                            </td>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $inscripcion->competencia->nombre }}</span>
                            </td>
                            <td>
                                @php
                                    $estado = $inscripcion->estado;
                                    $clases = match ($estado) {
                                        'pendiente' => 'bg-warning-50 text-warning-600',
                                        'aprobado' => 'bg-success-50 text-success-600',
                                        'rechazado' => 'bg-danger-50 text-danger-600',
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
                                    <a href="{{ route('inscripciones.show', $inscripcion) }}"
                                        class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                        <i class="ph ph-eye me-4"></i>
                                        Ver
                                    </a>

                                    <a href="{{ route('inscripciones.edit', $inscripcion) }}"
                                        class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                        <i class="ph ph-pencil me-4"></i>
                                        Editar
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", function () {
    $('#dataTable').DataTable({
        destroy: true,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontró nada",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 a 0 de 0 registros",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
});
</script>
@endsection 