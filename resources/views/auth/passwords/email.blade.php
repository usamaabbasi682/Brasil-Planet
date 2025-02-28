@extends('layouts.auth.master') 
@section('title', 'Password Reset') 
@section('main')
<div class="card card-plain custom-auth-form-card">
   <div class="card-header pb-0 text-start">
      <h3 class="font-weight-bolder" style="color: #071230;">
         Forgot Your Password?
      </h3>
      <p class="mb-0" style="color: #8392ab;">
         Please enter your email address. You will receive a link to create a password via email.
      </p>
   </div>
   <div class="card-body">
      <form role="form" class="text-start" method="POST" action="{{ route('password.email') }}">
         @csrf
         <label for="email">{{ __('Email') }}</label>
         <div class="mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
            @error('email')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <div class="text-center">
            <button type="submit" class="btn w-100 mt-4 mb-0" style="background-color: #2e5492; color: white;">
               {{ __('RESET PASSWORD') }}
            </button>
         </div>
      </form>
   </div>
   @if (Route::has('login'))
   <div class="card-footer text-center pt-0 px-lg-2 px-1">
      <a href="{{ route('login') }}" class="font-weight-bold" style="color: #ec3c66; text-decoration: underline;">Back to Login</a>
   </div>
   @endif
</div>
@endsection
