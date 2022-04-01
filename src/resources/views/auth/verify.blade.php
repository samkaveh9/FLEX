@extends('layouts.app')
@section('title', 'تایید حساب کاربری')
@section('content')
    <div class="account">
        
        
        
        
        <form method="POST" action="{{ route('verification.resend') }}" class="form">
            @csrf 
            <a class="account-logo" href="index.html">
                <img src="/main/img/weblogo.png" alt="">
            </a>
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            <p class="" style="text-align: center; margin-bottom: 32px">
                ایمیل تایید حساب کاربری برای شما ارسال شد برای ادامه فعالیت حساب خود را فعال کنید.
            </p>
    
            <p class="">
                اگر ایمیلی ارسال نشده روی دکمه زیر کلیک کنید
            </p>
       
       
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">ارسال مجدد تایید حساب کاربری</button>
        </form>
    </div>
@endsection
