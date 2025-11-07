@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Dashboard Admin</h1>
    <p>Selamat datang di panel admin.</p>

    <div class="row g-4 mt-4">
        <!-- Kelola Member -->
        <div class="col-md-4">
            <a href="{{ route('admin.kelolamember') }}" class="text-decoration-none">
                <div class="card shadow-sm border-0 bg-primary text-white">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-1">Kelola Member</h5>
                            <small><i class="fas fa-plus me-2"></i>Tambah Member Baru</small>
                        </div>
                        <i class="fas fa-user-plus fa-2x opacity-75"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Data Member -->
        <div class="col-md-4">
            <a href="{{ route('admin.datamember') }}" class="text-decoration-none">
                <div class="card shadow-sm border-0 bg-success text-white">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-1">Data Member</h5>
                            <span class="badge bg-light text-success fs-6">{{ $jumlahMember ?? 32 }}</span>
                        </div>
                        <i class="fas fa-users fa-2x opacity-75"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- Kelola Gallery -->
        <div class="col-md-4">
            <a href="{{ route('admin.kelolagallery') }}" class="text-decoration-none">
                <div class="card shadow-sm border-0 bg-warning text-dark">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-1">Kelola Gallery</h5>
                            <span class="badge bg-dark text-white fs-6">{{ $jumlahGallery ?? 14 }}</span>
                        </div>
                        <i class="fas fa-image fa-2x opacity-75"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
