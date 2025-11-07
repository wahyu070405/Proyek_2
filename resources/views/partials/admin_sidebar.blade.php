<aside class="admin-sidebar p-3">
    <!-- Logo + Welcome -->
    <div class="d-flex align-items-center mb-4">
        <div class="logo-wrapper bg-white rounded p-2 me-3">
            <img src="{{ asset('img/logo.png') }}" class="logo" width="50" alt="Logo">
        </div>
        <div class="text-white lh-1">
            <div class="fw-semibold fs-6">Welcome</div>
            <div class="fw-bold fs-5">Admin</div>
        </div>
    </div>

    <!-- Menu List -->
    <ul class="list-unstyled">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="text-white text-decoration-none d-flex align-items-center py-2">
                <i class="fas fa-home me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.datamember') }}" class="text-white text-decoration-none d-flex align-items-center py-2">
                <i class="fas fa-users me-2"></i> Data Member
            </a>
        </li>
        <li>
            <a href="{{ route('admin.kelolagallery') }}" class="text-white text-decoration-none d-flex align-items-center py-2">
                <i class="fas fa-image me-2"></i> Kelola Gallery
            </a>
        </li>
        <li>
            <a href="{{ route('admin.kelolamember') }}" class="text-white text-decoration-none d-flex align-items-center py-2">
                <i class="fas fa-user-plus me-2"></i> Kelola Member
            </a>
        </li>
    </ul>
</aside>
