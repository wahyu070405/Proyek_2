<aside class="admin-sidebar p-3">
    <div class="d-flex align-items-center mb-4">
        <img src="{{ asset('img/logo.png') }}" class="logo me-2" width="60" alt="Logo">
        <div class="text-white fw-semibold fs-6">Welcome Admin</div>
    </div>

    <ul class="list-unstyled">
        <li><a href="{{ route('admin.dashboard') }}" class="text-white text-decoration-none d-block py-2">Dashboard</a></li>
        <li><a href="{{ route('admin.datamember') }}" class="text-white text-decoration-none d-block py-2">Data Member</a></li>
        <li><a href="{{ route('admin.kelolagallery') }}" class="text-white text-decoration-none d-block py-2">Kelola Gallery</a></li>
        <li><a href="{{ route('admin.kelolamember') }}" class="text-white text-decoration-none d-block py-2">Kelola Member</a></li>
    </ul>
</aside>
