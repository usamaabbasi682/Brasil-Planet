<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
      <title>@yield('title','Brasil Planet')</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.1.1') }}" rel="stylesheet" />
      <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
      <style>
         .card-header {
            background-color: transparent !important;
         }
         .invalid-feedback {
            font-size: 12px !important;
         }
      </style>
      @stack('custom-css')
   </head>

   <body class="">
      <main class="main-content main-content-bg mt-0">
         <section>
            <div class="page-header min-vh-100">
               <div class="container-fluid vh-100 d-flex flex-column">
                  <div class="row flex-grow-1">
                     <div class="col-md-6 d-flex flex-column align-items-end justify-content-center">
                        <div class="mb-4">
                           <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo-img" style="width: 180px; position: absolute; top: 5%; left: 24px;" />
                        </div>
                        @yield('main')
                     </div>

                     <div class="col-md-6 d-none d-md-flex align-items-center justify-content-end p-0">
                        @if (request()->routeIs('password.request'))
                           <div class="auth-illustration h-100 w-100" style="background-image: url('{{ asset('assets/images/forgot-password-illustration.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right; margin-right: -20px;"></div>
                        @else 
                           <div class="auth-illustration h-100 w-100" style="background-image: url('{{ asset('assets/images/auth-illustration.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: right; margin-right: -20px;"></div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
      <script>
         var win = navigator.platform.indexOf("Win") > -1;
         if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
               damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
         }
      </script>
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.1.1') }}"></script>
      @stack('custom-js')
   </body>
</html>
