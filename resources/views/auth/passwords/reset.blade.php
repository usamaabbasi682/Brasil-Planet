@extends('layouts.auth.master') 
@section('title', 'Reset Password') 
@section('main')
<div class="card card-plain custom-auth-form-card">
   <div class="card-header pb-0 text-start">
      <h3 class="font-weight-bolder" style="color: #071230;">
         Change Your Password
      </h3>
      <p class="mb-0" style="color: #8392ab;">
         Update your password to keep your account secure.
      </p>
   </div>
   <div class="card-body">
      <form role="form" class="text-start" method="POST" action="{{ route('password.update') }}">
         @csrf
         <input type="hidden" name="token" value="{{ $token }}" />
         <input type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" />
         <label for="password">Password</label>
         <div class="mb-3 position-relative">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password-field" name="password" placeholder="Password" aria-label="Password" required autocomplete="new-password" />
            <span class="toggle-password position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;" onclick="togglePasswordVisibility('password-field', this)">
               <i class="fas fa-eye"></i>
            </span>
            @error('password')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
         <label for="password-confirm" class="password-confirm">Confirm Password</label>
         <div class="mb-3 position-relative">
            <input type="password" class="form-control form-control-lg" id="password-confirm" placeholder="Confirm Password" aria-label="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
            <span class="toggle-password position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;" onclick="togglePasswordVisibility('password-confirm', this)">
               <i class="fas fa-eye"></i>
            </span>
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
@push('custom-js')
<script>
   function togglePasswordVisibility(inputId, toggleElement) {
      const input = document.getElementById(inputId);
      const icon = toggleElement.querySelector("i");
      if (input.type === "password") {
         input.type = "text";
         icon.classList.remove("fa-eye");
         icon.classList.add("fa-eye-slash");
      } else {
         input.type = "password";
         icon.classList.remove("fa-eye-slash");
         icon.classList.add("fa-eye");
      }
   }
</script>
<script>
   var win = navigator.platform.indexOf("Win") > -1;
   if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
         damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
   }
</script>
@endpush
