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
                    <a href="{{ route('roles.index') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">
                        Roles
                    </a>
                </li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>

                <li><span class="text-main-600 fw-normal text-15">Detalles</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->
    </div>

    <div class="card mt-24">
        <div class="card-header border-bottom">
            <h4 class="mb-4">Detalles del Rol</h4>
            <p class="text-gray-600 text-15">Información completa del rol</p>
        </div>
        <div class="card-body">
            <div class="row gy-4">
                <div class="col-sm-6 col-xs-6">
                    <label class="form-label mb-4 h6">Nombre</label>
                    <p class="form-control-plaintext">{{ $rol->nombre }}</p>
                </div>

                <div class="col-sm-6 col-xs-6">
                    <label class="form-label mb-4 h6">Descripción</label>
                    <p class="form-control-plaintext">{{ $rol->descripcion }}</p>
                </div>

                <div class="col-sm-6 col-xs-6">
                    <label class="form-label mb-4 h6">Estado</label>
                    <p class="form-control-plaintext">
                        @if($rol->eliminado)
                            <span class="badge bg-danger">Eliminado</span>
                        @elseif($rol->estado == 'activo')
                            <span class="badge bg-success">Activo</span>
                        @else
                            <span class="badge bg-warning text-dark">Inactivo</span>
                        @endif
                    </p>
                </div>


                <div class="col-12 mt-4">
                    <a href="{{ route('roles.index') }}"
                        class="btn btn-secondary text-sm btn-sm px-24 rounded-pill py-12 gap-2">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection