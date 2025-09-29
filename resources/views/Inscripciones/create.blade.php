@extends('layouts.private')

@section('content')

<div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li>
                <a href="{{ route('dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Panel Principal</a>
            </li>
            <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
            <li><span class="text-main-600 fw-normal text-15">Nueva Inscripción</span></li>
        </ul>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card p-4">
    <form action="{{ route('inscripciones.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nombre del Equipo</label>
            <input type="text" name="nombre_equipo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Participantes</label>
            <textarea name="participantes" class="form-control" rows="3" placeholder="Ingrese nombres separados por coma" required></textarea>
        </div>

        <div class="mb-3">
            <label>Foto del Robot</label>
            <input type="file" name="foto_robot" class="form-control">
        </div>

        <div class="mb-3">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control" required>
                <option value="">--Seleccione--</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Competencia</label>
            <select name="competencia_id" class="form-control" required>
                <option value="">--Seleccione--</option>
                @foreach($competencias as $competencia)
                    <option value="{{ $competencia->id }}">{{ $competencia->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Inscripción</button>
    </form>
</div>

@endsection
