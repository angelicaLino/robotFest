@extends('layouts.private')

@section('content')

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li>
                    <a href="{{ route('dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Panel Principal</a>
                </li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>

                <li><a href="{{ route('equipos.index') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Equipos</a></li>

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>

                <li><span class="text-main-600 fw-normal text-15">Crear</span></li>
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

                {{-- Nombre del equipo --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-semibold">Nombre del Equipo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" 
                           value="{{ old('nombre') }}" required>
                </div>

                {{-- Competencia --}}
                <div class="mb-3">
                    <label for="competencia_id" class="form-label fw-semibold">Competencia</label>
                    <select name="competencia_id" id="competencia_id" class="form-control" required>
                        <option value="">-- Seleccionar competencia --</option>
                        @foreach ($competencias as $competencia)
                            <option value="{{ $competencia->id }}" 
                                {{ old('competencia_id') == $competencia->id ? 'selected' : '' }}>
                                {{ $competencia->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Descripción --}}
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
                </div>

                {{-- Estado --}}
                <div class="mb-3">
                    <label for="estado" class="form-label fw-semibold">Estado</label>
                    <select name="estado" id="estado" class="form-control" required>
                        <option value="activo" {{ old('estado') == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ old('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>

                {{-- Usuarios (Integrantes con tablas) --}}
                <div class="row">
                    <div class="col-md-6">
                        <h5>Usuarios disponibles</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr id="user-row-{{ $usuario->id }}">
                                        <td>{{ $usuario->name }} {{ $usuario->last_name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-success"
                                                onclick="agregarIntegrante({{ $usuario->id }}, '{{ $usuario->name }} {{ $usuario->last_name }}', '{{ $usuario->email }}')">
                                                Agregar
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <h5>Integrantes del equipo</h5>
                        <table class="table table-bordered" id="integrantes-table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Aquí se agregan dinámicamente --}}
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Input oculto para enviar los IDs de usuarios --}}
                <div id="usuarios-seleccionados"></div>

                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
<script>
    function agregarIntegrante(id, nombre, email) {
        // Evita duplicados
        if (document.getElementById("integrante-" + id)) return;

        // Agregar fila en tabla de integrantes con combo de rol
        let row = `
            <tr id="integrante-${id}">
                <td>${nombre}</td>
                <td>${email}</td>
                <td>
                    <select name="roles[${id}]" class="form-control" required>
                        <option value="integrante">Integrante</option>
                        <option value="capitán">Capitán</option>
                    </select>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger" onclick="quitarIntegrante(${id})">Quitar</button>
                </td>
            </tr>
        `;
        document.querySelector("#integrantes-table tbody").insertAdjacentHTML("beforeend", row);

        // Crear input oculto para el id del usuario
        let hiddenInput = `<input type="hidden" name="users[]" value="${id}" id="input-user-${id}">`;
        document.getElementById("usuarios-seleccionados").insertAdjacentHTML("beforeend", hiddenInput);

        // Ocultar usuario de la lista izquierda
        document.getElementById("user-row-" + id).style.display = "none";
    }

    function quitarIntegrante(id) {
        // Quitar fila de integrantes
        document.getElementById("integrante-" + id).remove();

        // Quitar input oculto
        document.getElementById("input-user-" + id).remove();

        // Reactivar usuario en la tabla izquierda
        document.getElementById("user-row-" + id).style.display = "";
    }
</script>
@endsection
