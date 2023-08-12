@extends('layouts.auth.auth')

@section('title', 'Sign Up')
@section('auth-title', 'Sign Up')
@section('auth-subtitle', 'Input your data to register to our website.')

@section('auth-footer')
    <p class="text-gray-600">
        Already have an account?
        <a href="auth-login.html" class="font-bold">Log in</a>.
    </p>
@endsection

@section('content')
    <form action="index.html">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" placeholder="Username" />
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" placeholder="Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Sign Up
        </button>
    </form>
@endsection
