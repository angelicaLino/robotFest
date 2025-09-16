@extends('layouts.private')

@section('content')
<h2>Agregar Evento</h2>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('eventos.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ old('nombre') }}">
    <textarea name="descripcion" placeholder="Descripción" class="form-control mb-2">{{ old('descripcion') }}</textarea>
    <input type="date" name="fecha" class="form-control mb-2" value="{{ old('fecha') }}">
    <input type="text" name="ubicacion" placeholder="Ubicación" class="form-control mb-2" value="{{ old('ubicacion') }}">
    <select name="estado" class="form-control mb-2">
        <option value="activo" {{ old('estado')=='activo' ? 'selected' : '' }}>Activo</option>
        <option value="inactivo" {{ old('estado')=='inactivo' ? 'selected' : '' }}>Inactivo</option>
        <option value="eliminado" {{ old('estado')=='eliminado' ? 'selected' : '' }}>Eliminado</option>
    </select>
    <label for="categorias">Categorías</label>
    <select name="categorias[]" multiple class="form-control mb-2">
        @foreach($categorias as $cat)
            <option value="{{ $cat->id }}" {{ (collect(old('categorias'))->contains($cat->id)) ? 'selected':'' }}>{{ $cat->nombre }}</option>
        @endforeach
    </select>
    <button class="btn btn-success">Guardar</button>
</form>
@endsection
