@extends('layouts.auth.master') 
@section('title', 'Sign up') 
@section('main')
<div class="card card-plain custom-auth-form-card">
   <div class="card-header pb-0 text-start">
      <h3 class="font-weight-bolder" style="color: #071230;">
         Create an Account
      </h3>
      <p class="mb-0" style="color: #8392ab;">
         Enter your details below to register
      </p>
   </div>
   <div class="card-body">
      <form role="form" class="text-start" method="POST" action="{{ route('register') }}">
         @csrf
         <label for="name">{{ __('Name') }}</label>
         <div class="mb-1">
            <input type="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" aria-label="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

            @error('name')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <label for="name">{{ __('Email Address') }}</label>
         <div class="mb-1">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" />

            @error('email')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <label for="password">{{ __('Password') }}</label>
         <div class="mb-1">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" name="password" required autocomplete="new-password" />

            @error('password')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <label for="password-confirm">{{ __('Confirm Password') }}</label>
         <div class="mb-1">
            <input type="password" id="password-confirm" class="form-control @error('password') is-invalid @enderror" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password" />
         </div>
         <div class="text-center">
            <button type="submit" class="btn w-100 mb-0 mt-2" style="background-color: #2e5492; color: white;">
               {{ __('Sign up') }}
            </button>
         </div>
      </form>
   </div>
   @if (Route::has('login'))
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Already have an account?
            <a href="{{ route('login') }}" class="font-weight-bold" style="color: #2e5492;">Sign in</a>
        </p>
    </div>
   @endif
</div>
@endsection
