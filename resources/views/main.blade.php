<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badak R-One GYM</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!-- === NAVBAR === -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"><img src="{{ asset('img/logo.png') }}" alt="logo" width="65"> Badak R-One GYM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#membership">Membership</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- === HERO SECTION === -->
  <section id="home" class="hero-section text-center text-white">
    <div class="overlay"></div>
    <div class="container position-relative">
      <h2 class="fw-bold mb-2">Badak R-One Gym in Indramayu</h2>
      <p class="lead">Max out your bench, squat, and deadlift in our gym</p>
      <a href="#membership" class="btn btn-danger mt-3 px-4 py-2 fw-semibold">Join Our Membership Now!</a>
    </div>
  </section>

  <!-- === GALLERY === -->
  <section id="gallery" class="py-5 section-dark">
    <div class="container text-center">
      <h3 class="fw-bold mb-4 text-white">Gallery</h3>
      <div class="row g-3">
        @for($i=1; $i<=6; $i++)
        <div class="col-6 col-md-4">
          <div class="gallery-box">
            <img src="{{ asset('img/gallery' . $i . '.jpg') }}" class="img-fluid rounded" alt="Gallery {{ $i }}">
          </div>
        </div>
        @endfor
      </div>
    </div>
  </section>

  <!-- === MEMBERSHIP=== -->
  <section id="membership" class="py-5 section-dark text-center">
    <div class="container">
      <h3 class="fw-bold mb-4 text-white">INFORMASI MEMBERSHIP</h3>
      <div class="row g-4 justify-content-center">
        <div class="col-md-3 col-10">
          <div class="package-card blue">
            <h5 class="fw-bold">Paket 1 Bulan</h5>
            <p>Start From</p>
            <h4>Rp. 100.000/Month</h4><br>
            <p>Benefit: </p>
            <p>Akses Semua alat di R-One GYM</p>
            <p>Akses Semua alat di R-One GYM</p>
            <p> alat di R-One GYM</p>
            <p>Akses Semua alat di R-One GYM</p>
          </div>
        </div>

        <div class="col-md-3 col-10">
          <div class="package-card red">
            <h5 class="fw-bold">Paket 3 Bulan</h5>
            <p>Start From</p>
            <h4>Rp. 270.000/Month</h4><br>
            <p>Benefit: </p>
            <p>Akses Semua alat di R-One GYM</p>
            <p>Akses Semua alat di R-One GYM</p>
            <p> alat di R-One GYM</p>
            <p>Akses Semua alat di R-One GYM</p>
          </div>
        </div>

        <div class="col-md-3 col-10">
          <div class="package-card gold">
            <h5 class="fw-bold">Paket 9 Bulan</h5>
            <p>Start From</p>
            <h4>Rp. 810.000/Month</h4><br>
            <p>Benefit: </p>
            <p>Akses Semua alat di R-One GYM</p>
            <p>Akses Semua alat di R-One GYM</p>
            <p> alat di R-One GYM</p>
            <p>Akses Semua alat di R-One GYM</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- === FOOTER === -->
<footer class="footer text-center py-5">
  <div class="container">
    <div class="social-icons mb-3">
      <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
      <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
    </div>

    <div class="footer-links mb-3">
      <a href="#home" class="mx-3">Home</a>
      <a href="#gallery" class="mx-3">Gallery</a>
      <a href="#membership" class="mx-3">Membersip</a>
    </div>

    <p class="m-0">
      Information <span class="fw-bold">badakronegym</span> | 2025.
    </p>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
