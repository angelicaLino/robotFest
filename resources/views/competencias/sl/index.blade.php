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

                <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>

                <li><span class="text-main-600 fw-normal text-15">Roles</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        @if($competencia && $competencia->estado == 'activo')


            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="{{ route('sl.create', ['competencia_id' => $competencia_id ?? '']) }}"
                    class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                    <i class="ph ph-plus me-4"></i>
                    Registrar Intento
                </a>
            </div>
        @endif

        <!-- Breadcrumb Right End -->
    </div>


    {{-- Mensaje de error --}}
    @if (session('error'))
        <div class="bg-danger-200 rounded-16 p-12 flex-between flex-wrap gap-8 mb-16">
            <div class="flex-align gap-16">
                <span class="w-20 h-20 rounded-5 flex-center  bg-danger-600 text-white"><i class="ph ph-x"></i></span>
                <h5 class="mb-0 fw-medium text-danger-600">{{ session('error') }}</h5>
            </div>
        </div>
    @endif

    {{-- Mensaje de éxito --}}
    @if (session('success'))
        <div class="bg-success-200 rounded-16 p-12 flex-between flex-wrap gap-8 mb-16">
            <div class="flex-align gap-16">
                <span class="w-20 h-20 rounded-5 flex-center  bg-success-600 text-white"><i class="ph ph-check"></i></span>
                <h5 class="mb-0 fw-medium text-success-600">{{ session('success') }}</h5>
            </div>
        </div>
    @endif


    <div class="mb-16 d-flex align-items-center gap-8">
        <form method="GET" action="{{ route('sl.index') }}">
            <label for="competencia_id" class="fw-bold me-2">Competencia:</label>
            <select name="competencia_id" id="competencia_id" class="form-select d-inline-block w-auto">
                <option value="">-- Seleccionar --</option>
                @foreach ($competencias as $comp)
                    <option value="{{ $comp->id }}" {{ $competencia_id == $comp->id ? 'selected' : '' }}>
                        {{ $comp->nombre }} ({{ $comp->descripcion }})
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary ms-2">Filtrar</button>
        </form>

        @if($competencia && $competencia->estado == 'activo')
            <form action="{{ route('sl.cerrarCompetencia', ['competencia' => $competencia_id]) }}" method="POST"
                class="d-inline">
                @csrf
                <button type="submit"
                    class="btn btn-danger text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2"
                    onclick="return confirm('¿Estás seguro de cerrar la competencia? Esta acción no se puede deshacer.')">
                    <i class="ph ph-flag"></i>
                    Cerrar Competencia
                </button>
            </form>
        @endif
    </div>

    @if($resultados->isNotEmpty())
        <div class="card p-16 mb-16">
            <div class="row gy-4">
                <h5 class="fw-bold mb-12">Resultados de la Competencia</h5>

                @foreach($resultados as $r)
                    <div class="col-xxl-4 col-xl-6 col-md-4 col-sm-6">
                        <div class="statistics-card p-xl-4 p-16 flex-align gap-10 rounded-8" style="background-color: {{ $r->posicion == 1 ? '#FFD700' : ($r->posicion == 2 ? '#C0C0C0' : '#CD7F32') }}">
                            <div>
                                <h4 class="mb-0">#{{ $r->posicion }}</h4>
                                <span class="fw-medium">Equipo: {{ $r->equipo->nombre ?? '-' }}</span>
                                <br>
                                <span class="fw-medium">Distancia: {{ $r->distancia_max }} mts.</span>
                                <br>
                                <span class="fw-medium">Tiempo: {{ $r->tiempo_min }} seg.</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="card overflow-hidden">
        <div class="card-body overflow-x-auto">
            <table id="dataTable" class="table table-striped align-middle mb-0 mt-5">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Equipo</th>
                        <th>Número de Intento</th>
                        <th>Distancia</th>
                        <th>Tiempo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($intentos as $intento)
                        <tr>
                            <td>{{ $intento->id }}</td>
                            <td>{{ $intento->equipo->nombre ?? 'Sin equipo' }}</td>
                            <td>{{ $intento->intento_num }}</td>
                            <td>{{ $intento->distancia }}</td>
                            <td>{{ $intento->tiempo }}</td>
                            <td></td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

@endsection

@section('script')

@endsection