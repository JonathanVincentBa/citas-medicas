<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{ config('app.name') }} - @yield('title')</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0') }}" type="text/css">
  @yield('styles')
</head>

<body>
  <!-- Sidenav -->
    @include('includes.panel.menu')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
      @include('includes.panel.sidebar')
      
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
    </div>
    <!-- Page content -->
      @yield('content')
      <!-- Footer -->
      @include('includes.panel.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.2.0') }}"></script>
</body>

</html>