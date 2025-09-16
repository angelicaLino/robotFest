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

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>

                <li><a href="{{ route('equipos.index') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Equipos</a></li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>

                <li><span class="text-main-600 fw-normal text-15">Crear Equipo</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>

    {{-- Mensaje de error --}}
    @if ($errors->any())
        <div class="bg-danger-200 rounded-16 p-12 flex-between flex-wrap gap-8 mb-16">
            <div class="flex-align gap-16">
                <span class="w-20 h-20 rounded-5 flex-center bg-danger-600 text-white"><i class="ph ph-x"></i></span>
                <h5 class="mb-0 fw-medium text-danger-600">Por favor corrige los errores en el formulario.</h5>
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('equipos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nro" class="form-label fw-semibold">Nro</label>
                    <input type="number" name="nro" id="nro" class="form-control" value="{{ old('nro') }}" required>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-semibold">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label fw-semibold">Categoría</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria') }}" required>
                </div>

                <div class="mb-3">
                    <label for="miembros" class="form-label fw-semibold">Miembros</label>
                    <input type="number" name="miembros" id="miembros" class="form-control" value="{{ old('miembros') }}" required>
                </div>

                <div class="mb-3">
                    <label for="evento" class="form-label fw-semibold">Evento</label>
                    <input type="text" name="evento" id="evento" class="form-control" value="{{ old('evento') }}" required>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
