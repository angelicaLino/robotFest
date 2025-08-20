@extends('layouts.private')

@section('content')
<div class="container mx-auto mt-6">
    <div class="bg-white rounded-2xl shadow p-6 max-w-lg mx-auto">
        <h2 class="text-xl font-bold mb-4">➕ Agregar Usuario</h2>

        {{-- Mensajes de error --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            {{-- Nombre --}}
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Correo electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Contraseña</label>
                <input type="password" name="password" id="password"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            {{-- Confirmación Password --}}
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-medium">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            {{-- Rol --}}
            <div class="mb-4">
                <label for="rol_id" class="block text-gray-700 font-medium">Rol</label>
                <select name="rol_id" id="rol_id"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required>
                    <option value="">-- Selecciona un rol --</option>
                    @foreach($roles as $rol)
                        <option value="{{ $rol->id }}" {{ old('rol_id') == $rol->id ? 'selected' : '' }}>
                            {{ $rol->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Botones --}}
            <div class="flex justify-between">
                <a href="{{ route('usuarios.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500">
                    Cancelar
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
