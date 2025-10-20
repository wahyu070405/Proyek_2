@extends('layout.main')

@section('title', 'Home')

@section('content')
<section class="hero-section d-flex align-items-center justify-content-center text-center text-white">
  <div class="overlay"></div>
  <div class="container position-relative px-3">
    <h1 class="display-4 fw-bold">Badak R-One Gym in Indramayu</h1>
    <p class="lead mb-4 fst-italic">Max out your bench, squat, and deadlift in our gym</p>
    <a href="{{ url('/membership') }}" class="btn btn-danger btn-lg rounded-pill px-4">
      Join Our Membership Now!
    </a>
  </div>
</section>
@endsection
