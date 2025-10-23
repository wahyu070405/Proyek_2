@extends('layouts.main')

@section('content')
<div class="gallery-section container py-5 mt-5 text-center">
  <h2 class="text-white mb-4">Our Gym Gallery</h2>
  <div class="row g-4">
    @for ($i = 1; $i <= 6; $i++)
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="gallery-item shadow">
          <img src="{{ asset('img/gallery' . $i . '.jpg') }}" class="img-fluid rounded" alt="Gallery {{ $i }}">
        </div>
      </div>
    @endfor
  </div>
</div>
@endsection
