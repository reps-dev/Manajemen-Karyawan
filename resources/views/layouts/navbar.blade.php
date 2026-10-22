<nav class="navbar navbar-dark bg-dark sidebar-nav shadow-sm" aria-label="Sidebar navigation">
    <div class="d-flex align-items-center justify-content-between w-100 mb-4">
        <a class="navbar-brand fw-bold mb-0" href="/">Karyawan</a>
    </div>

    <ul class="navbar-nav w-100">
        <x-nav-item label="Home" href="/" :active="request()->is('/')" />
        <x-nav-item label="Data Karyawan" href="{{ route('karyawan.index') }}" :active="request()->is('karyawan*')" />
        <x-nav-item label="Tambah Karyawan" href="{{ route('karyawan.create') }}" :active="request()->is('karyawan/create')" />
    </ul>
</nav>