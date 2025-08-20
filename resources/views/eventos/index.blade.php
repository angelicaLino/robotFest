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

                <li><span class="text-main-600 fw-normal text-15">Eventos</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <a href="{{ route('eventos.create') }}"
                class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                <i class="ph ph-plus me-4"></i>
                Agregar
            </a>
        </div>
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



    <div class="card overflow-hidden">
        <div class="card-body overflow-x-auto">
            <table id="dataTable" class="table table-striped align-middle mb-0 mt-5">
                <thead class="bg-light">
                    <tr>
                        <th class="fw-semibold text-gray-600">Nro.</th>
                        <th class="fw-semibold text-gray-600">Nombre</th>
                        <th class="fw-semibold text-gray-600">Descripción</th>
                        <th class="fw-semibold text-gray-600">Fecha</th>
                        <th class="fw-semibold text-gray-600">Estado</th>
                        <th class="fw-semibold text-gray-600">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $evento->id }}</span>
                            </td>
                            <td>
                                <div class="flex-align gap-8">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $evento->nombre }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="flex-align gap-8">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $evento->descripcion }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="flex-align gap-8">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $evento->fecha }}</span>
                                </div>
                            </td>
                            <td>
                                @php
                                    $estado = $evento->eliminado ? 'eliminado' : $evento->estado;
                                    $clases = match ($estado) {
                                        'activo' => 'bg-success-50 text-success-600',
                                        'inactivo' => 'bg-warning-50 text-warning-600',
                                        'suspendido' => 'bg-danger-50 text-danger-600',
                                        'eliminado' => 'bg-danger-50 text-danger-600',
                                        default => 'bg-secondary text-white',
                                    };
                                @endphp

                                <span
                                    class="text-13 py-6 px-10 fw-bold {{ $clases }} d-inline-flex align-items-center gap-8 rounded-pill">
                                    {{ ucfirst($estado) }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start gap-2">
                                    @if ($evento->eliminado)
                                        {{-- Botón restaurar --}}
                                        <a href="{{ route('eventos.show', $evento) }}"
                                            class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                            <i class="ph ph-eye me-4"></i>
                                            Ver
                                        </a>
                                        <a href="javascript:;"
                                            class="btn btn-success btn-restore text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2"
                                            data-id="{{ $evento->id }}" data-bs-toggle="modal"
                                            data-bs-target="#restore-confirmation-modal">
                                            <i class="ph ph-arrow-counter-clockwise me-4"></i>
                                            Restaurar
                                        </a>
                                        <a href="javascript:;"
                                            class="btn btn-danger btn-delete-permanent text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2"
                                            data-id="{{ $evento->id }}" data-name="{{ $evento->nombre }}" data-bs-toggle="modal"
                                            data-bs-target="#delete-permanentemente-confirmation-modal">
                                            <i class="ph ph-trash me-4"></i>
                                            Eliminar
                                        </a>
                                    @else
                                        {{-- Botones normales --}}

                                        <a href="{{ route('eventos.edit', $evento) }}"
                                            class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                            <i class="ph ph-pencil me-4"></i>
                                            Editar
                                        </a>

                                        <a href="javascript:;"
                                            class="btn btn-danger btn-delete text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2"
                                            data-id="{{ $evento->id }}" data-bs-toggle="modal"
                                            data-bs-target="#delete-confirmation-modal">
                                            <i class="ph ph-trash me-4"></i>
                                            Eliminar
                                        </a>
                                    @endif
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="delete-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="fs-3 fw-bold mt-3">¿Estás seguro?</div>
                        <div class="text-muted mt-2">
                            Esta acción eliminará el registro.
                        </div>
                    </div>
                    <div class="modal-footer text-center justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="delete-permanentemente-confirmation-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <i data-lucide="alert-triangle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                    <div class="text-2xl mt-5">¿Eliminar Registro Permanentemente?</div>
                    <div class="text-slate-500 mt-2">
                        Estás a punto de eliminar el registro <span id="name" class="fw-bold"></span>.
                        <br>
                        Esta acción no se puede deshacer.
                    </div>
                </div>
                <div class="modal-footer text-center justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="delete-permanent-form" method="POST" class="inline-block">
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->

    <!-- BEGIN: Restore Confirmation Modal -->
    <div id="restore-confirmation-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="restore-form" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body text-center">
                        <i data-lucide="rotate-ccw" class="w-16 h-16 text-success mx-auto mt-3"></i>
                        <div class="fs-3 fw-bold mt-3">¿Restaurar registro?</div>
                        <div class="text-muted mt-2">
                            Esta acción restaurará el registro eliminado.
                            <br>El registro volverá a estar activo en el sistema.
                        </div>
                    </div>
                    <div class="modal-footer text-center justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Restaurar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- END: Restore Confirmation Modal -->
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const baseUrl = {!! json_encode(url('/eventos')) !!};

            // Eliminar
            const deleteButtons = document.querySelectorAll(".btn-delete");
            const deleteForm = document.getElementById("delete-form");

            deleteButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const dataId = button.getAttribute("data-id");
                    deleteForm.setAttribute("action", `${baseUrl}/${dataId}`);
                });
            });

            // Restaurar
            const restoreButtons = document.querySelectorAll(".btn-restore");
            const restoreForm = document.getElementById("restore-form");

            restoreButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const dataId = button.getAttribute("data-id");
                    restoreForm.setAttribute("action", `${baseUrl}/${dataId}/restore`);
                });
            });

            // Eliminacion Permanentemente
            const deletePermanentButtons = document.querySelectorAll(".btn-delete-permanent");
            const deletePermanentForm = document.getElementById("delete-permanent-form");
            const nameSpan = document.getElementById("name");

            deletePermanentButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const dataId = button.getAttribute("data-id");
                    const dataName = button.getAttribute("data-name");

                    // Cambiar el nombre en el modal
                    nameSpan.textContent = dataName;

                    // Cambiar la acción del form al endpoint correcto
                    deletePermanentForm.setAttribute("action", `${baseUrl}/${dataId}/delete`);
                });
            });
        });
    </script>
@endsection