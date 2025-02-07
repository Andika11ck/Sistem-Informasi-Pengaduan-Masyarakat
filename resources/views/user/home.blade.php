@extends('layouts.app')

@section('content')

<!-- Hero Section dengan Background & Overlay -->
<section id="hero" class="d-flex align-items-center text-center position-relative" style="height: 100vh; background: url('https://radarpena.disway.id/upload/9f124dbff243b2a1fafb9159d9001d61.jpg') center/cover no-repeat;">
    <div class="container position-relative" data-aos="fade-in" data-aos-delay="200">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-4" style="background: rgba(15, 8, 55, 0.8); color: #46d2ac;">
                    <div class="card-header text-white border-light">
                        <h4 class="m-0 font-weight-bold">PEMKAB KONOHA</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="fw-bold">Selamat Datang di SIPUMA</h1>
                        <p class="lead">Sistem Informasi Pengaduan Masyarakat Konoha</p>
                        <a href="{{ route('register') }}" class="btn btn-success btn-lg rounded-pill mt-3 px-4 shadow">Buat Pengaduan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Informasi SIPUMA -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/sipuma.jpg') }}" class="img-fluid rounded-4 shadow" alt="SIPUMA">
            </div>
            <div class="col-lg-6" data-aos="fade-left" style="color: #fcfcfc">
                <h2 class="fw-bold " >Apa itu SIPUMA?</h2>
                <p class="text" style="text-align: justify; ">
                    Sistem Informasi Manajemen Pengaduan Masyarakat (SIPUMA) adalah platform teknologi informasi yang dirancang untuk mempermudah masyarakat dalam mengajukan pengaduan, keluhan, dan aspirasi kepada pemerintah atau instansi terkait secara cepat dan transparan.
                </p>
                <p class="text" style="font-style: italic; text-align: justify;">
                    Dengan SIPUMA, setiap laporan tidak hanya diterima, tetapi juga dianalisis untuk membantu pemerintah dalam mengambil keputusan yang lebih akurat dan efisien dalam menangani masalah masyarakat.
                </p>
                
            </div>
        </div>
    </div>
</section>

@endsection
