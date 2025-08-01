@extends('layouts.auth')

@section('contenido')
    <section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="{{ asset('assets_private/images/thumbs/LoginFoto.jpeg')}}" alt="Foto de la ignauguración del RobotFest" style="border: none; margin: 0; padding: 0; display: block;">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="index.html" class="auth-right__logo">
                    <img src="{{ asset('assets_private/images/logo/logoemi.jpeg')}}" alt="LogoEmi">  
                </a>
                <h2 class="mb-8">bienvenido/ &#128075;</h2>
                <p class="text-gray-600 text-15 mb-32">Inicia sesión en tu cuenta y comienza la aventura</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-24">
                        <label for="email" class="form-label mb-8 h6">Email or Username</label>
                        <div class="position-relative">
                            <input type="email" name="email" class="form-control py-11 ps-40" id="email" value="{{ old('email') }}" placeholder="Type your username" required>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-user"></i></span>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-24">
                        <label for="password" class="form-label mb-8 h6">Current Password</label>
                        <div class="position-relative">
                            <input type="password" name="password" class="form-control py-11 ps-40" id="password"
                                placeholder="Enter Current Password" value="" required>
                            <span
                                class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash"
                                id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-lock"></i></span>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <div class="mb-32 flex-between flex-wrap gap-8">
                        <div class="form-check mb-0 flex-shrink-0">
                            <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" value="" id="remember">
                            <label class="form-check-label text-15 flex-grow-1" for="remember">Remember Me </label>
                        </div>
                        <a href="{{ route('password.request') }}"
                            class="text-main-600 hover-text-decoration-underline text-15 fw-medium">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">Sign In</button>
                    <p class="mt-32 text-gray-600 text-center">New on our platform?
                        <a href="{{ route('register') }}" class="text-main-600 hover-text-decoration-underline">Create an account</a>
                    </p>

                </form>
            </div>
        </div>
    </section>
@endsection
