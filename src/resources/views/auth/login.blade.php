@extends('layouts.app')
@section('title', 'ورود')
@section('content')
    <div class="account">
        <form method="POST" class="form" action="{{ route('login') }}">
            @csrf
            <a class="account-logo" href="index.html">
                <img src="img/weblogo.png" alt="">
            </a>
            <div class="form-content form-account">
                <input type="text" name="email" class="txt-l txt @error('email') is-invalid @enderror"
                       placeholder="پست الکترونیکی (ایمیل) یا شماره موبایل">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <small>{{ $message }}</small>
                </span>
                @enderror
                <input type="password" name="password" class="txt-l txt @error('password') is-invalid @enderror"
                       placeholder="رمز عبور">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <small>{{ $message }}</small>
                </span>
                @enderror
                <br>
                <button class="btn btn--login">ورود</button>
                <label class="ui-checkbox">
                    مرا بخاطر داشته باش
                    <input type="checkbox" checked="checked" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkmark"></span>
                </label>
                <div class="recover-password">
                    <a href="{{ route('password.request') }}">بازیابی رمز عبور</a>
                </div>
            </div>
            <div class="form-footer">
                <a href="{{ route('register') }}">صفحه ثبت نام</a>
            </div>
        </form>
    </div>
@endsection
