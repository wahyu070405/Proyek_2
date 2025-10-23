@extends('layouts.main')

@section('content')
<section class="membership-section py-5 mt-5">
  <div class="overlay"></div>
  <div class="container position-relative">
    <h2 class="text-center text-white mb-5">Membership Packages</h2>
    <div class="row g-4 justify-content-center">
      
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-white text-center shadow price-card bg-primary bg-opacity-75">
          <div class="card-body">
            <h4 class="card-title mb-3">Paket 1 Bulan</h4>
            <p>Start From</p>
            <h2 class="fw-bold">Rp. 100.000/Mont</h2>
            <hr class="border-light">
            <p>Benefit: Akses Semua alat di R-One GYM</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-white text-center shadow price-card bg-danger bg-opacity-75">
          <div class="card-body">
            <h4 class="card-title mb-3">Paket 3 Bulan</h4>
            <p>Start From</p>
            <h2 class="fw-bold">Rp. 270.000/Mont</h2>
            <hr class="border-light">
            <p>Benefit: Akses Semua alat di R-One GYM</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-white text-center shadow price-card bg-dark bg-opacity-75">
          <div class="card-body">
            <h4 class="card-title mb-3">Paket 9 Bulan</h4>
            <p>Start From</p>
            <h2 class="fw-bold">Rp. 810.000/Mont</h2>
            <hr class="border-light">
            <p>Benefit: Akses Semua alat di R-One GYM</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
