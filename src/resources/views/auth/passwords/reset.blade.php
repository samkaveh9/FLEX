@extends('layouts.app') @section('content')

<div class="account">
    <form method="POST" class="form" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}" />
        <a class="account-logo" href="index.html">
            <img src="img/weblogo.png" alt="" />
        </a>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session("status") }}
        </div>
        @endif
        <div class="form-content form-account">
            <input
                id="email"
                value="{{ $email ?? old('email') }}"
                type="email"
                name="email"
                class="txt-l txt @error('email') is-invalid @enderror"
                placeholder="پست الکترونیکی (ایمیل)"
                required
                autocomplete="email"
                autofocus
            />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror
            <br />

            <input
                id="password"
                value="{{ old('password') }}"
                type="password"
                name="password"
                class="txt-l txt @error('password') is-invalid @enderror"
                placeholder="رمز عبور"
                required
            />

            @error('password')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror

            <br />

            <input
                id="password-confirm"
                value="{{ old('password') }}"
                type="password"
                name="password_confirmation"
                class="txt-l txt @error('password') is-invalid @enderror"
                placeholder="تکرار رمز عبور"
                required
            />

            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror

            <br />

            <button class="btn btn-recoverpass">بازیابی</button>
        </div>
    </form>
</div>

@endsection
