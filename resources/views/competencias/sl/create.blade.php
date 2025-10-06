@extends('layouts.private')

@section('content')
<div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li><a href="{{ route('dashboard') }}" class="text-gray-200 fw-normal text-15 hover-text-main-600">Panel Principal</a></li>
            <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
            <li><span class="text-main-600 fw-normal text-15">Registrar Intento - Seguidor de Línea</span></li>
        </ul>
    </div>
</div>

<div class="card p-16">
    <form action="{{ route('sl.store') }}" method="POST">
        @csrf

        {{-- Competencia --}}
        <div class="mb-16">
            <label for="competencia_id" class="fw-bold">Competencia</label>
            <select name="competencia_id" id="competencia_id" class="form-select" required>
                <option value="">-- Seleccionar --</option>
                @foreach ($competencias as $comp)
                    <option value="{{ $comp->id }}" {{ $competencia_id == $comp->id ? 'selected' : '' }}>
                        {{ $comp->nombre }} ({{ $comp->descripcion }})
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Equipo --}}
        <div class="mb-16">
            <label for="equipo_id" class="fw-bold">Equipo</label>
            <select name="equipo_id" id="equipo_id" class="form-select" required>
                <option value="">-- Seleccionar --</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- Intento --}}
        <div class="mb-16">
            <label for="intento_num" class="fw-bold">Número de Intento</label>
            <input type="number" name="intento_num" id="intento_num" class="form-control" readonly required>
            <small id="mensaje_intentos" class="text-gray-500"></small>
        </div>

        {{-- Distancia --}}
        <div class="mb-16">
            <label for="distancia" class="fw-bold">Distancia Alcanzada (m)</label>
            <input type="number" name="distancia" id="distancia" class="form-control" min="0" step="0.01" required>
        </div>

        {{-- Tiempo --}}
        <div class="mb-16">
            <label for="tiempo" class="fw-bold">Tiempo (s)</label>
            <input type="number" name="tiempo" id="tiempo" class="form-control" min="0" step="0.01" required>
        </div>

        {{-- Errores --}}
        <div class="mb-16">
            <label for="errores" class="fw-bold">Errores</label>
            <textarea name="errores" id="errores" class="form-control" rows="2"></textarea>
        </div>

        {{-- Observaciones --}}
        <div class="mb-16">
            <label for="observaciones" class="fw-bold">Observaciones</label>
            <textarea name="observaciones" id="observaciones" class="form-control" rows="2"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Intento</button>
    </form>
</div>
@endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const equipoSelect = document.getElementById('equipo_id');
    const intentoInput = document.getElementById('intento_num');
    const mensaje = document.getElementById('mensaje_intentos');

    // Datos desde el backend
    const intentos = @json($intentos);
    const equiposOriginales = @json($equipos); // Todos los equipos
    const maxIntentos = {{ $competencia_param ?? 3 }}; // Valor por defecto 3

    // Función para actualizar lista de equipos disponibles
    function actualizarEquipos() {
        // Limpiar opciones
        equipoSelect.innerHTML = '<option value="">-- Seleccionar --</option>';

        equiposOriginales.forEach(e => {
            const usados = intentos.filter(i => i.equipo_id === e.id).length;
            if (usados < maxIntentos) {
                const option = document.createElement('option');
                option.value = e.id;
                option.text = e.nombre;
                equipoSelect.appendChild(option);
            }
        });

        // Limpiar intento y mensaje
        intentoInput.value = '';
        mensaje.textContent = '';
    }

    // Inicializar la lista al cargar la página
    actualizarEquipos();

    // Cuando se seleccione un equipo
    equipoSelect.addEventListener('change', function() {
        const equipoId = parseInt(this.value);
        if (!equipoId) return;

        const usados = intentos.filter(i => i.equipo_id === equipoId).length;
        const siguiente = usados + 1;
        const restantes = maxIntentos - usados - 1;

        intentoInput.value = siguiente;

        if (restantes < 0) {
            mensaje.textContent = "⚠️ Este equipo ya alcanzó el máximo de intentos (" + maxIntentos + ")";
            intentoInput.value = "";
        } else {
            mensaje.textContent = "Intento número " + siguiente + " — Quedan " + restantes + " intento(s).";
        }
    });
});
</script>

@endsection
