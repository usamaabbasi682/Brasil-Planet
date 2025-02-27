@extends('layouts.auth.master') 
@section('title', 'Login') 
@section('main')
<div class="card card-plain custom-auth-form-card">
   <div class="card-header pb-0 text-start">
      <h3 class="font-weight-bolder" style="color: #071230;">
         Welcome back
      </h3>
      <p class="mb-0" style="color: #8392ab;">
         Enter your email and password to sign in
      </p>
   </div>
   <div class="card-body">
      <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
         @csrf
         <label for="email">Email or ID</label>
         <div class="mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email or ID" aria-label="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

            @error('email')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <label for="password">Password</label>
         <div class="mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" name="password" required autocomplete="current-password" />

            @error('password')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="form-check form-switch custom-switch-color">
               <input class="form-check-input" type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }} />
               <label class="form-check-label" for="remember">Remember me</label>
            </div>
            @if (Route::has('password.request'))
            <a style="color: #1f36c7;" href="{{ route('password.request') }}">
               Forgot Password?
            </a>
            @endif
         </div>
         <div class="text-center">
            <button type="submit" class="btn w-100 mt-4 mb-0" style="background-color: #2e5492; color: white;">
               Sign in
            </button>
         </div>
      </form>
   </div>
   @if (Route::has('register'))
   <div class="card-footer text-center pt-0 px-lg-2 px-1">
      <p class="mb-4 text-sm mx-auto">
         Don't have an account?
         <a href="{{ route('register') }}" class="font-weight-bold" style="color: #2e5492;">Sign up</a>
      </p>
   </div>
   @endif
</div>
@endsection
