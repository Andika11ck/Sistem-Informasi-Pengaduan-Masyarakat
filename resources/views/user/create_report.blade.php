@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Pengaduan Baru</h1>

        <!-- Flash Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Informasi Pelaporan -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tata Cara Pelaporan</h5>
                        <ul>
                            <li>Isi data diri dengan benar dan lengkap.</li>
                            <li>Pilih kategori pengaduan yang sesuai.</li>
                            <li>Jelaskan permasalahan dengan jelas dan detail.</li>
                            <li>Unggah bukti yang relevan jika memungkinkan.</li>
                            <li>Pastikan informasi yang diberikan akurat.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Apa Saja yang Tidak Boleh Dilakukan</h5>
                        <ul>
                            <li>Mengirim laporan palsu atau menyesatkan.</li>
                            <li>Menggunakan kata-kata kasar atau tidak pantas.</li>
                            <li>Mengunggah dokumen yang tidak relevan.</li>
                            <li>Melanggar privasi orang lain.</li>
                            <li>Menggunakan sistem untuk tujuan di luar pengaduan resmi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Pengaduan -->
        <form class="card shadow mb-4 p-4" method="POST" action="/user/report/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Telepon</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control" id="address" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="category" class="form-label">Kategori</label>
                <select name="category" id="category" class="form-control">
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Pengaduan</label>
                <textarea name="description" class="form-control" id="description" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="proof">Bukti Pengaduan </label>
                <input type="file" name="proof" class="form-control" id="proof">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
        </form>
    </div>
@endsection
