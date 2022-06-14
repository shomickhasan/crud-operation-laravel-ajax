@extends('layouts.adminlayout')
@section('adminlayoutComtent')
<div class="d-flex align-items-center justify-content-center ht-100v">
    <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
      <source src="{{asset('backeend/videos/video1.mp4')}}" type="video/mp4">
      <source src="{{asset('backeend/videos/video1.ogv')}}" type="video/ogg">
      <source src="{{asset('backeend/videos/video1.webm')}}" type="video/webm">
    </video><!-- /video -->
    <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
      <div class="login-wrapper wd-500 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-white-5 tx-center mg-b-60">Forget Password</div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('password.email') }}">
         @csrf
         <!-- Email Address -->
         <div class="form-group">
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="form-control fc-outline-dark" type="email" placeholder="Enter your Existing Email" name="email" :value="old('email')" required autofocus />
        </div>
        <button type="submit" class="btn btn-info btn-block">Veryfi</button>
        </form>
      </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
  </div><!-- d-flex -->
@endsection