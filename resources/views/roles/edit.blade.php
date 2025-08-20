@extends('layouts.private')

@section('content')
<h1>Editar Rol</h1>

<form action="{{ route('roles.update', $rol->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nombre del rol</label>
        <input type="text" name="name" class="form-control" value="{{ $rol->name }}" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
</form>
@endsection
