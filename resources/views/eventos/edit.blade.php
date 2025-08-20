@extends('layouts.private')

@section('content')

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li>
                    <a href="{{ route('dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">
                        Panel Principal
                    </a>
                </li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>

                <li>
                    <a href="{{ route('eventos.index') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">
                        Eventos
                    </a>
                </li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>

                <li><span class="text-main-600 fw-normal text-15">Editar</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>

    {{-- Mensaje de error --}}
    @if ($errors->any())
        <div class="bg-danger-200 rounded-16 p-12 flex flex-col gap-4 mb-16">
            <div class="flex-align gap-16">
                <span class="w-20 h-20 rounded-5 flex-center bg-danger-600 text-white">
                    <i class="ph ph-x"></i>
                </span>
                <h5 class="mb-0 fw-medium text-danger-600">Se encontraron errores</h5>
            </div>

            <ul class="mt-2 ml-12 list-disc list-inside text-danger-800">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card mt-24">
        <div class="card-header border-bottom">
            <h4 class="mb-4">Editar Evento</h4>
            <p class="text-gray-600 text-15">Modifica los datos del evento</p>
        </div>
        <div class="card-body">
            <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row gy-4">
                    <div class="col-sm-6 col-xs-6">
                        <label for="nombre" class="form-label mb-8 h6">Nombre</label>
                        <input type="text" class="form-control py-11 @error('nombre') border-danger @enderror"
                            id="nombre" name="nombre" value="{{ old('nombre', $evento->nombre) }}" placeholder="">
                        @error('nombre')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <label for="descripcion" class="form-label mb-8 h6">Descripción</label>
                        <input type="text" class="form-control py-11" id="descripcion" name="descripcion"
                            value="{{ old('descripcion', $evento->descripcion) }}" placeholder="">
                        @error('descripcion')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <label for="fecha" class="form-label mb-8 h6">Fecha</label>
                        <input type="date" class="form-control py-11" id="fecha" name="fecha"
                            value="{{ old('fecha', $evento->fecha) }}" placeholder="">
                        @error('fecha')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <label for="estado" class="form-label mb-8 h6">Estado</label>
                        <select class="form-select py-11 @error('estado') border-danger @enderror"
                            id="estado" name="estado">
                            <option value="activo" {{ old('estado', $evento->estado) == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ old('estado', $evento->estado) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        @error('estado')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <div class="flex-align justify-content-start gap-8">
                            <a href="{{ route('eventos.index') }}"
                                class="btn btn-secondary bg-main-100 border-main-100 text-main-600 text-sm btn-sm px-24 rounded-pill py-12 gap-2">
                                Cancelar
                            </a>
                            <button type="submit"
                                class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 gap-2">
                                Actualizar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
