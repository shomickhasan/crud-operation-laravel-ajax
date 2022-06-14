@extends('layouts.adminlayout')
@section('adminlayoutComtent')
    <div class="d-flex align-items-center justify-content-center ht-100v">
        <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{asset('backeend/videos/video1.mp4')}}" type="video/mp4">
        <source src="{{asset('backeend/videos/video1.ogv')}}" type="video/ogg">
        <source src="{{asset('backeend/videos/video1.webm')}}" type="video/webm">
        </video><!-- /video -->
        <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6 text-left">
            <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-white-5 tx-center mg-b-60">The Admin Template For Perfectionist</div>
               
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                 <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" placeholder="Enter your username " class="form-control fc-outline-dark" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" placeholder="Enter your passw " class="form-control fc-outline-dark " type="password" name="password" required autocomplete="current-password" />
            </div>
             <!-- forgot password -->
             <div class="flex items-center justify-end mb-2">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif  
            </div>
             <!-- forgot password -->
             <button type="submit" class="btn btn-info btn-block">Sign In</button>  
            
            <!-- remember me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>
           

                <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
            </form>
        </div><!-- login-wrapper -->
        </div><!-- overlay-body -->
    </div><!-- d-flex -->
    
@endsection