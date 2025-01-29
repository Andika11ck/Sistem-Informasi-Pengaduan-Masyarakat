@extends('layouts.app')  

@section('content')  
<section id="hero" class="d-flex align-items-center">  
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">  
        <div class="card shadow mb-4" style="background-color: #0f0837; color: #46d2ac;">  
            <div class="card-header py-3" style="border-block-color: white;">  
                <h6 class="m-0 font-weight-bold " style="color: #46d2ac">PEMKAB KONOHA</h6>  
            </div>  
            <div class="card-body">  
                <h1>Selamat Datang di Sistem Pengaduan Masyarakat Konoha</h1>  
                
            </div>  
        </div>  

        <!-- Kontainer kedua di bawah kontainer pertama -->  
        <div class="row content ">
            
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('assets/img/sipuma.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                <p style="text-align: justify;">
                    Sistem Informasi Manajemen Pengaduan Masyarakat  (SIPUMA) adalah sebuah platform teknologi informasi yang dirancang untuk memfasilitasi proses pengaduan dari masyarakat kepada pemerintah atau instansi terkait. Sistem ini menggunakan teknologi web untuk memungkinkan masyarakat mengajukan keluhan, saran, dan aspirasi mereka secara efektif dan efisien, tanpa harus melalui prosedur yang rumit atau waktu yang lama. Dengan konteks digital yang terus berkembang, SIPUMA bertujuan untuk menjembatani komunikasi antara pemerintah dan warga, sehingga suara masyarakat dapat lebih mudah didengar dan ditindaklanjuti.
                </p>
                <p style="font-style: italic; text-align: justify">
                    Setiap pengaduan yang diajukan melalui sistem ini tidak hanya dicatat, tetapi juga dikelola secara sistematis dengan menerapkan berbagai elemen analisis data untuk memantau dan mengevaluasi pola-pola masalah yang terjadi. Melalui sistem ini, pemerintah dapat melakukan tindak lanjut yang lebih cepat dan tepat, serta mengambil keputusan strategis berdasarkan informasi yang dikumpulkan. Proses ini tidak hanya meningkatkan akuntabilitas pemerintah, tetapi juga menciptakan transparansi dalam penanganan masalah masyarakat.
                </p>
            </div>
            </div>
    </div>  
</section>  
@endsection