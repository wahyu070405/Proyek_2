<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Badak R-One Gym')</title>

  <!-- Bootstrap -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>

  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Konten Halaman --}}
  @yield('content')

  <!-- Bootstrap JS -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
