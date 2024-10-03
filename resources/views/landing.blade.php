@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="welcome-text">Selamat Datang di Aplikasi Digital Absensi Karyawan</h1>
                    <p>Aplikasi ini dirancang untuk memudahkan pencatatan dan pemantauan kehadiran karyawan secara digital. Dengan fitur-fitur canggih yang mempermudah proses absensi, Anda dapat mengelola data kehadiran dengan lebih efisien.</p>
                    <a href="#about-section" class="btn btn-primary learn-more-btn">Selengkapnya &raquo;</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/welcome-image.png') }}" alt="Welcome Image">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (Tentang Aplikasi Absensi) -->
    <section id="about-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Tentang Aplikasi Absensi</h2>
                    <p>Aplikasi absensi ini memberikan solusi cepat dan akurat untuk memonitor kehadiran karyawan. Dengan tampilan yang sederhana dan user-friendly, aplikasi ini membantu Anda menyimpan dan mengelola data kehadiran secara efektif.</p>
                    <p>Beberapa fitur utama yang tersedia di aplikasi ini termasuk:</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pencatatan Kehadiran Real-time</h5>
                            <p class="card-text">Karyawan dapat melakukan absensi secara real-time melalui aplikasi, sehingga data kehadiran langsung tercatat dalam sistem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Absensi Otomatis</h5>
                            <p class="card-text">Sistem secara otomatis menghasilkan laporan absensi yang dapat diakses kapan saja oleh manajemen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Data Karyawan</h5>
                            <p class="card-text">Kelola data karyawan seperti nama, jabatan, dan status kehadiran dengan mudah menggunakan fitur manajemen data.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Tampilan Responsif</h5>
                            <p class="card-text">Akses aplikasi dari berbagai perangkat seperti komputer, tablet, maupun smartphone dengan tampilan yang responsif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tutor-absensi">
        <div class="container">
            <div class="col-md-12">
                <h2 class="section-title">Tutorial Pemakaian Aplikasi Digital Absensi</h2>
                    <p>Berikut merupakan Tata Cara Absensi :
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h6 class="card-title">1. Buka Aplikasi Digital Absensi melalui Web Browser</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h6 class="card-title">2. Login pada Aplikasi Digital Absensi dengan Username & Password</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h6 class="card-title">3. Pilih Menu Absensi dan Isi Form Absensi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
