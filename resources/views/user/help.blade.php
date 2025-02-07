@extends('layouts.app')

@section('content')

<style>


    /* Card dengan efek glowing */
    .custom-card {
        background: rgba(230, 230, 230, 0.872)5)
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .custom-card:hover {
        transform: scale(1.02);
        box-shadow: 0px 0px 25px rgba(255, 255, 255, 0.3);
    }

    /* Step Progress */
    .step {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .step .icon {
        background: #46d2ac;
        color: white;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 18px;
        font-weight: bold;
        margin-right: 15px;
        box-shadow: 0px 0px 10px rgba(70, 210, 172, 0.5);
    }

    .step-text {
        font-size: 16px;
    }

    /* Link */
    .contact-link {
        color: #46d2ac;
        font-weight: bold;
        text-decoration: none;
    }

    .contact-link:hover {
        text-decoration: underline;
    }

</style>

<div class="container">
    <div class="card custom-card shadow mb-4">
        <div class="card-header text-center">
            <h2 class="fw-bold">❓ Bantuan</h2>
        </div>
        <div class="card-body">
            <p class="text-center">
                Jika Anda mengalami kesulitan dalam menggunakan sistem ini, silakan hubungi kami melalui kontak berikut:  
                <a href="/user/contact" class="contact-link">Klik di sini</a>
            </p>

            <hr>

            <h4 class="fw-bold">📌 Tata Cara Pelaporan</h4>

            <div class="step">
                <div class="icon">1</div>
                <div class="step-text">Masuk/login ke akun Anda jika sudah memiliki akun.</div>
            </div>
            <div class="step">
                <div class="icon">2</div>
                <div class="step-text">Jika belum memiliki akun, lakukan registrasi terlebih dahulu.</div>
            </div>
            <div class="step">
                <div class="icon">3</div>
                <div class="step-text">Pilih menu <strong>"Lapor"</strong> (menu ini hanya muncul setelah login).</div>
            </div>
            <div class="step">
                <div class="icon">4</div>
                <div class="step-text">Isi formulir pelaporan dengan informasi yang diperlukan.</div>
            </div>
            <div class="step">
                <div class="icon">5</div>
                <div class="step-text">Klik tombol <strong>"Kirim"</strong> untuk mengirim laporan Anda.</div>
            </div>

            <hr>

            <h4 class="fw-bold">🔔 Petunjuk Penggunaan</h4>
            <ul class="list-group text-dark ">
                <li class="list-group-item bg-transparent  border-light">
                    <i class="bi bi-envelope-check"></i> Anda akan menerima <strong>email konfirmasi</strong> setelah laporan berhasil dikirim.
                </li>
                <li class="list-group-item bg-transparent  border-light">
                    <i class="bi bi-telephone"></i> Kami juga akan <strong>menghubungi Anda melalui nomor telepon</strong>.
                </li>
                <li class="list-group-item bg-transparent  border-light">
                    <i class="bi bi-whatsapp"></i> <strong>Pastikan nomor telepon Anda benar dan terdaftar di WhatsApp</strong> untuk mempermudah konfirmasi.
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
