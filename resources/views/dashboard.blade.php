@extends('layouts.app')

@section('title', 'Dashboard UTS Laravel Project')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-primary text-white">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="fw-bold mb-1">Selamat datang, Reyvandi!</h2>
                        <p class="mb-0 opacity-75">Berikut adalah ringkasan aktivitas Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4 d-flex flex-column">
                <div class="mx-auto mb-3">
                    <i class="fas fa-database fa-3x text-primary"></i>
                </div>
                <h5 class="card-title fw-bold">Pengelolaan Data</h5>
                <p class="card-text text-muted flex-grow-1">Kelola dan pantau semua data pada aplikasi dengan mudah</p>
                <div class="mt-auto">
                    <a href="{{ route('pengelolaan', request()->query()) }}" class="btn btn-primary w-100">
                        <i class="fas fa-arrow-right me-2"></i> Akses Pengelolaan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4 d-flex flex-column">
                <div class="rounded-circle bg-info bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-info"></i>
                </div>
                <h5 class="card-title fw-bold">Profil Pengguna</h5>
                <p class="card-text text-muted flex-grow-1">Lihat dan kelola informasi profil pribadi Anda</p>
                <div class="mt-auto">
                    <a href="{{ route('profile', request()->query()) }}" class="btn btn-info w-100">
                        <i class="fas fa-id-card me-2"></i> Lihat Profil
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4 d-flex flex-column">
                <div class="rounded-circle bg-warning bg-opacity-10 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-cog fa-2x text-warning"></i>
                </div>
                <h5 class="card-title fw-bold">Pengaturan</h5>
                <p class="card-text text-muted flex-grow-1">Sesuaikan pengaturan aplikasi sesuai kebutuhan Anda</p>
                <div class="mt-auto">
                    <a href="#" class="btn btn-warning text-white w-100">
                        <i class="fas fa-sliders-h me-2"></i> Akses Pengaturan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="fas fa-bell text-primary me-2"></i> Notifikasi
                </h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-0 py-3 d-flex border-0 border-bottom">
                        <div class="me-3">
                            <span class="badge rounded-pill bg-primary">Baru</span>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-semibold">Pembaruan Sistem</h6>
                            <p class="text-muted small mb-0">Sistem telah diperbarui ke versi terbaru</p>
                        </div>
                        <small class="text-muted ms-auto">Hari ini</small>
                    </div>
                    <div class="list-group-item px-0 py-3 d-flex border-0 border-bottom">
                        <div class="me-3">
                            <span class="badge rounded-pill bg-success">Info</span>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-semibold">Data Berhasil Ditambahkan</h6>
                            <p class="text-muted small mb-0">Item baru telah ditambahkan ke database</p>
                        </div>
                        <small class="text-muted ms-auto">Kemarin</small>
                    </div>
                    <div class="list-group-item px-0 py-3 d-flex border-0">
                        <div class="me-3">
                            <span class="badge rounded-pill bg-success">Info</span>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-semibold">Pemeliharaan Server</h6>
                            <p class="text-muted small mb-0">Pemeliharaan server pada tanggal 1 Mei</p>
                        </div>
                        <small class="text-muted ms-auto">3 hari lalu</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="fas fa-info-circle text-primary me-2"></i> Informasi Perkuliahan
                </h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="rounded p-2 bg-primary bg-opacity-10 me-3">
                        <i class="fas fa-graduation-cap text-white"></i> <!-- Diganti dengan ikon graduation cap -->
                    </div>
                    <div>
                        <h6 class="mb-0 fw-semibold">Total SKS Praktikum</h6>
                        <span class="fs-6 fw-bold">17</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded p-2 bg-success bg-opacity-10 me-3">
                        <i class="fas fa-university text-succes"></i> <!-- Diganti dengan ikon university -->
                    </div>
                    <div>
                        <h6 class="mb-0 fw-semibold">Semester yang sedang di jalani</h6>
                        <span class="fs-6 fw-bold">4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
