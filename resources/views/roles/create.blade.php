@extends('layouts.private')

@section('content')
<h1>Agregar Rol</h1>

<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nombre del rol</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
@endsection
