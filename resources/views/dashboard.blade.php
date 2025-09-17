@extends('layouts.private')
@section('content')

<!-- 🔹 Fila 1: Métricas -->
<div class="row gy-4">
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-2">{{ $eventosActivos }}</h4>
                <span class="text-gray-600">Eventos Activos</span>
                <div class="flex-between gap-8 mt-16">
                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl">
                        <i class="ph-fill ph-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-2">{{ $competencias }}</h4>
                <span class="text-gray-600">Competencias Registradas</span>
                <div class="flex-between gap-8 mt-16">
                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-green-600 text-white text-2xl">
                        <i class="ph-fill ph-trophy"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-2">{{ $equipos }}</h4>
                <span class="text-gray-600">Equipos Participantes</span>
                <div class="flex-between gap-8 mt-16">
                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-yellow-600 text-white text-2xl">
                        <i class="ph-fill ph-robot"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-2">{{ $participantes }}</h4>
                <span class="text-gray-600">Participantes</span>
                <div class="flex-between gap-8 mt-16">
                    <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-red-600 text-white text-2xl">
                        <i class="ph-fill ph-users-three"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div> <!-- 🔚 cierre de fila 1 -->


<!-- 🔹 Fila 2: Competencias por Categoría -->
<div class="row gy-4 mt-4">
    <div class="col-lg-12">
        <div class="card p-4 shadow-sm">
            <h5 class="mb-3">Competencias por Categoría</h5>
            <canvas id="competenciasPorCategoria" style="max-height: 350px;"></canvas>
        </div>
    </div>
</div> <!-- 🔚 cierre de fila 2 -->

<!-- Script del gráfico -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('competenciasPorCategoria').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Sumo', 'Seguidor de línea', 'Fútbol Robot', 'Drones'], // 🔹 Categorías
                datasets: [{
                    data: [5, 3, 7, 2], // 🔹 Datos de ejemplo
                    backgroundColor: [
                        '#4e73df',
                        '#1cc88a',
                        '#36b9cc',
                        '#f6c23e'
                    ],
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let value = context.raw;
                                return context.label + ": " + value + " competencias";
                            }
                        }
                    }
                }
            }
        });
    });
</script>

@endsection
