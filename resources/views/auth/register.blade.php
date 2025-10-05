@extends('layouts.auth')

@section('contenido')
    <section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="{{ asset('assets_private/images/thumbs/LoginFoto.jpeg')}}" alt="Foto de la ignauguración del RobotFest" style="border: none; margin: 0; padding: 0; display: block;">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="#" class="auth-right__logo">
                    <img src="{{ asset('assets_private/images/logo/logoemi.jpeg')}}" alt="LogoEmi">  
                </a>
                <h2 class="mb-8">Robot Fest</h2>
                <p class="text-gray-600 text-15 mb-32">Registrese para ser parte de los eventos.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-24">
                        <label for="name" class="form-label mb-8 h6">{{ __('Name') }}</label>
                        <div class="position-relative">
                            <input type="text" name="name" class="form-control py-11 ps-40" id="name" 
                                value="{{ old('name') }}" placeholder="Ingrese su nombre">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-user"></i></span>
                        </div>
                        @error('email')
                            <div class="text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-24">
                        <label for="email" class="form-label mb-8 h6">{{ __('Email') }}</label>
                        <div class="position-relative">
                            <input type="email" name="email" class="form-control py-11 ps-40" id="email" 
                                value="{{ old('email') }}" placeholder="Ingrese su correo electrónico">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-user"></i></span>
                        </div>
                        @error('email')
                            <div class="text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-24">
                        <label for="password" class="form-label mb-8 h6">{{ __('Password') }}</label>
                        <div class="position-relative">
                            <input type="password" name="password" class="form-control py-11 ps-40" id="password"
                                placeholder="Ingrese su contraseña" value="">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-lock"></i></span>
                        </div>
                        @error('password')
                            <div class="text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-24">
                        <label for="password_confirmation" class="form-label mb-8 h6">{{ __('Confirm Password') }}</label>
                        <div class="position-relative">
                            <input type="password" name="password_confirmation" class="form-control py-11 ps-40" id="password_confirmation"
                                placeholder="Ingrese su contraseña" value="">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-lock"></i></span>
                        </div>
                        @error('password_confirmation')
                            <div class="text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-main rounded-pill w-100">{{ __('Register') }}</button>
                    <p class="mt-32 text-gray-600 text-center">Ya tiene una cuenta ?
                        <a href="{{ route('login') }}" class="text-main-600 hover-text-decoration-underline">{{ __('Log In') }}</a>
                    </p>

                </form>
            </div>
        </div>
    </section>
@endsection
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
