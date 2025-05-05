@extends('layouts.app')

@section('title', 'Profile UTS Laravel Project')

@section('content')
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card border-0">
            <div class="card-body p-4 text-center">
                <div class="position-relative mb-4 mx-auto" style="width: 150px;">
                    <img src="{{ asset('FOTOPROFIL.jpg') }}" class="img-fluid rounded-circle border shadow-sm" alt="Profile Picture"
                        style="width: 150px; height: 150px; object-fit: cover;">
                    <button class="btn btn-sm btn-primary rounded-circle shadow-sm position-absolute bottom-0 end-0">
                        <i class="fas fa-camera"></i>
                    </button>
                </div>

                <h4 class="fw-bold">Reyvandi</h4>
                <p class="text-muted mb-4">ryvndiap123@gmail.com</p>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i> Edit Profil
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-key me-2"></i> Ubah Password
                    </button>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-around text-center">
                    <div>
                        <h5 class="fw-bold text-primary mb-0">17</h5>
                        <small class="text-muted">SKS</small>
                    </div>
                    <div>
                        <h5 class="fw-bold text-primary mb-0">04</h5>
                        <small class="text-muted">Semester</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card border-0 mb-4">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                <h5 class="fw-bold mb-0">
                    <i class="fas fa-user me-2 text-primary"></i> Informasi Profil
                </h5>
                <button class="btn btn-sm btn-primary">
                    <i class="fas fa-edit me-1"></i> Edit
                </button>
            </div>
            <div class="card-body p-4">
                <div class="alert alert-primary bg-primary bg-opacity-10 border-0">
                    <div class="d-flex">
                        <div>
                            <h6 class="fw-bold mb-1" style="color: #fff8f8;">Selamat datang, {{ $username }}!</h6>
                            <p class="mb-0 small" style="color: #fff8f8">Kelola informasi profilmu untuk mengontrol akun Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-4">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Nama Lengkap</label>
                    </div>
                    <div class="col-md-9">
                        <p class="mb-0 fw-medium">Reyvandi Adji Pramudya </p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Username</label>
                    </div>
                    <div class="col-md-9">
                        <p class="mb-0 fw-medium">Reyvandi</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Email</label>
                    </div>
                    <div class="col-md-9">
                        <p class="mb-0 fw-medium">ryvndiap123@gmail.com</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Status</label>
                    </div>
                    <div class="col-md-9">
                        <span class="badge bg-success px-3 py-2">Aktif</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Terdaftar pada</label>
                    </div>
                    <div class="col-md-9">
                        <p class="mb-0 fw-medium">{{ date('d F Y') }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Tanggal Lahir</label>
                    </div>
                    <div class="col-md-9">
                        <p class="mb-0 fw-medium">19 - Mei - 2004</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label text-muted fw-medium">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <p class="mb-0 fw-medium">Jl. Mangga XI no 6 , Kota Madiun , Jawa Timur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0">
            <div class="card-header bg-white py-3">
                <h5 class="fw-bold mb-0">
                    <i class="fas fa-shield-alt me-2 text-primary"></i> Keamanan Akun
                </h5>
            </div>
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                    <div>
                        <h6 class="fw-bold mb-1">Password</h6>
                        <p class="text-muted small mb-0">Terakhir diubah 30 hari yang lalu</p>
                    </div>
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-key me-1"></i> Ubah
                    </button>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                    <div>
                        <h6 class="fw-bold mb-1">Autentikasi Dua Faktor</h6>
                        <p class="text-muted small mb-0">Tingkatkan keamanan akun</p>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="twoFactorSwitch" check>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold mb-1">Notifikasi Keamanan</h6>
                        <p class="text-muted small mb-0">Dapatkan pemberitahuan tentang aktivitas mencurigakan</p>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="securitySwitch" checked>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
