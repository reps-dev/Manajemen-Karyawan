<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Karyawan</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <x-nav-item label="Home" href="/" :active="request()->is('/')" />
                <x-nav-item label="Data Karyawan" href="{{ route('karyawan.index') }}" :active="request()->is('karyawan*')" />
                <x-nav-item label="Tambah Karyawan" href="{{ route('karyawan.create') }}" :active="request()->is('karyawan/create')" />
            </ul>
        </div>
    </div>
</nav>