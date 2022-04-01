@extends('layouts.app') @section('title', 'بازیابی رمز عبور')
@section('content')
<div class="account">
    <form class="form" method="POST" action="{{ route('password.email') }}">
        @csrf
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
                type="email"
                name="email"
                class="txt-l txt @error('email') is-invalid @enderror"
                placeholder="پست الکترونیکی (ایمیل)"
                value="{{ old('email') }}"
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
            <button class="btn btn-recoverpass">بازیابی</button>
        </div>
        <div class="form-footer">
            <a href="{{ route('login') }}">صفحه ورود</a>
        </div>
    </form>
</div>
@endsection
