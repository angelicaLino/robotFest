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
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <a href="{{ route('usuarios.create') }}"
                class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                <i class="ph ph-plus me-4"></i>
                Agregar
            </a>
        </div>
        <!-- Breadcrumb Right End -->
    </div>

    <div class="card overflow-hidden">
        <div class="card-body overflow-x-auto">
            <table id="dataTable" class="table table-sm table-hover align-middle mb-3 mt-5 ">
                <thead class="bg-light">
                    <tr>
                        <th class="fw-semibold text-gray-600 text-small">Nro.</th>
                        <th class="fw-semibold text-gray-600 text-small">Nombre</th>
                        <th class="fw-semibold text-gray-600 text-small">Correo</th>
                        <th class="fw-semibold text-gray-600 text-small">Rol</th>
                        <th class="fw-semibold text-gray-600 text-small">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $usuario->id }}</span>
                            </td>
                            <td>
                                <div class="flex-align gap-8">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $usuario->name }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="flex-align gap-8">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $usuario->email }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="flex-align gap-8">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $usuario->rol->nombre }}</span>
                                </div>
                            </td>
                            <td class="text-center">
                                @if ($usuario->eliminado)
                                    <div class="d-flex justify-content-center gap-2">
                                        {{-- Botón restaurar --}}
                                        <a href="{{ route('usuarios.show', $usuario) }}" 
                                            class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> 
                                            Ver
                                        </a>
                                        <a href="javascript:;" class="btn btn-success btn-restore text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2" 
                                            data-id="{{ $usuario->id }}"
                                            data-tw-toggle="modal" 
                                            data-tw-target="#restore-confirmation-modal">
                                            <i data-lucide="rotate-ccw" class="w-4 h-4 mr-2"></i> Restaurar
                                        </a>
                                        <a href="javascript:;" class="btn btn-danger btn-delete-permanent text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2" 
                                            data-id="{{ $usuario->id }}"
                                            data-name="{{ $usuario->nombre }}" data-tw-toggle="modal"
                                            data-tw-target="#delete-permanentemente-confirmation-modal">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Eliminar Permanentemente
                                        </a>
                                    </div>
                                @else
                                    {{-- Botones normales --}}
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('usuarios.edit', $usuario) }}"
                                            class="btn btn-primary text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2">
                                            <i class="ph ph-pencil me-4"></i>
                                            Editar
                                        </a>

                                        <a href="javascript:;" 
                                            class="btn btn-danger btn-delete text-sm btn-sm px-24 rounded-pill py-12 d-flex align-items-center gap-2"
                                            data-id="{{ $usuario->id }}" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#delete-confirmation-modal">
                                            <i class="ph ph-trash me-4"></i>
                                            Eliminar
                                        </a>
                                    </div>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
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


<div id="delete-permanentemente-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-5 text-center">
                <i data-lucide="alert-triangle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                <div class="text-2xl mt-5">¿Estás seguro?</div>
                <div class="text-slate-500 mt-2">
                    Estás a punto de eliminar el registro Permanentemente. 
                    <br>
                    Esta acción no se puede deshacer.
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
                <form id="delete-rol-form" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->

<!-- BEGIN: Restore Confirmation Modal -->
<div id="restore-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="restore-form" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="rotate-ccw" class="w-16 h-16 text-success mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">¿Restaurar rol?</div>
                        <div class="text-slate-500 mt-2">
                            Esta acción restaurará al rol eliminado.
                            <br> El rol volverá a estar activo en el sistema.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancelar</button>
                        <button type="submit" class="btn btn-success w-24">Restaurar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END: Restore Confirmation Modal -->
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const baseDeleteUrl = {!! json_encode(url('/roles')) !!};

        // Eliminar
        const deleteButtons = document.querySelectorAll(".btn-delete");
        const deleteForm = document.getElementById("delete-form");

        deleteButtons.forEach(button => {
            button.addEventListener("click", () => {
                const dataId = button.getAttribute("data-id");
                deleteForm.setAttribute("action", `${baseDeleteUrl}/${dataId}`);
            });
        });

        // Restaurar
        const restoreButtons = document.querySelectorAll(".btn-restore");
        const restoreForm = document.getElementById("restore-form");
        const baseRestoreUrl = {!! json_encode(url('/roles')) !!};

        restoreButtons.forEach(button => {
            button.addEventListener("click", () => {
                const dataId = button.getAttribute("data-id");
                restoreForm.setAttribute("action", `${baseRestoreUrl}/${dataId}/restore`);
            });
        });

        // Eliminacion Permanentemente
        const deletePermanentButtons = document.querySelectorAll(".btn-delete-permanent"); // cambiar clase
        const deletePermanentForm = document.getElementById("delete-rol-form");
        const nameSpan = document.getElementById("name");        

        deletePermanentButtons.forEach(button => {
            button.addEventListener("click", () => {
                const dataId = button.getAttribute("data-id");
                const dataName = button.getAttribute("data-name");

                // Cambiar el nombre en el modal
                nameSpan.textContent = dataName;

                // Cambiar la acción del form al endpoint correcto
                deletePermanentForm.setAttribute("action", `${baseDeleteUrl}/${dataId}/delete`);
            });
        });
    });
</script>
@endsection