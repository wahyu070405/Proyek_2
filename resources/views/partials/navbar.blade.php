<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" width="60" class="me-2">
      <span class="fw-bold text-white">Badak R-One GYM</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ url('/gallery') }}">Gallery</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ url('/membership') }}">Membership</a></li>
      </ul>
    </div>
  </div>
</nav>
