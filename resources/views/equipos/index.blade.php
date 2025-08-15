@extends('layouts.private')

@section('content')
<div class="container-fluid mt-4">
    <h2>Categorías</h2>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Agregar Categoría</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion ?? 'Sin descripción' }}</td>
                <td>
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
