@extends('layouts.auth.auth')

@section('title', 'Forgot Password')
@section('auth-title', 'Forgot Password')
@section('auth-subtitle', 'Input your email and we will send you reset password link.')

@section('auth-footer')
    <p class="text-gray-600">
        Remember your account?
        <a href="auth-login.html" class="font-bold">Log in</a>.
    </p>
@endsection

@section('content')
    <form action="index.html">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Send
        </button>
    </form>
@endsection
