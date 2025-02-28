<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>@yield('title',config('app.name', 'Laravel'))</title>
      <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
      <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
      <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
      <style>
         .dataTable-wrapper .dataTable-top {
            display: none;
         }

         .dataTable-wrapper .dataTable-bottom .dataTable-info {
            display: none;
         }
      </style>
      @stack('custom-css')
   </head>
   <body class="g-sidenav-show">
    
      @includeIf('layouts.include.aside')
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
         @includeIf('layouts.include.nav')
         @yield('main')
      </main>
      
      <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/threejs.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/orbit-controls.js') }}"></script>
      <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.2.0') }}"></script>
      @stack('custom-js')
   </body>
</html>
