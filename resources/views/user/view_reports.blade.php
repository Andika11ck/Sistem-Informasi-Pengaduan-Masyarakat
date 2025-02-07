@extends('layouts.app')

@section('content')

<style>
    /* Background dengan efek soft */
    body {
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        color: white;
    }

    /* Card dengan efek glow */
    .custom-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .custom-card:hover {
        transform: scale(1.02);
        box-shadow: 0px 0px 25px rgba(255, 255, 255, 0.3);
    }

    /* Tabel dengan efek neumorphism */
    .custom-table {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .custom-table th {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        text-align: center;
    }

    .custom-table td {
        background: rgba(255, 255, 255, 0.15);
        color: white;
    }

    .custom-table tbody tr:hover {
        background: rgba(255, 255, 255, 0.3);
        transition: 0.3s;
    }

    /* Badge status dengan efek glowing */
    .badge {
        font-size: 14px;
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 20px;
        display: inline-block;
        transition: all 0.3s ease-in-out;
    }

    .bg-success {
        background: linear-gradient(to right, #56ab2f, #a8e063);
        color: white;
        box-shadow: 0px 0px 10px rgba(86, 171, 47, 0.7);
    }

    .bg-danger {
        background: linear-gradient(to right, #ff416c, #ff4b2b);
        color: white;
        box-shadow: 0px 0px 10px rgba(255, 65, 108, 0.7);
    }

    .bg-warning {
        background: linear-gradient(to right, #ffcc00, #ff8800);
        color: white;
        box-shadow: 0px 0px 10px rgba(255, 204, 0, 0.7);
    }

    .bg-success:hover, .bg-danger:hover, .bg-warning:hover {
        transform: scale(1.1);
        transition: all 0.3s ease-in-out;
    }

</style>

<div class="container-fluid">
    <!-- Flash Messages -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
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

    <!-- Heading -->
    <h1 class="h3 mb-3 text-white">📋 Data Pelaporan Masyarakat</h1>
    <p class="mb-4 text-light">Berikut adalah data dari berbagai laporan masyarakat yang ada di Konoha.</p>

    <!-- Card Wrapper -->
    <div class="card custom-card shadow mb-4">
        <div class="card-header py-3 text-center">
            <h6 class="m-0 font-weight-bold text-white">🔍 Data Pengaduan Masyarakat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered custom-table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>👤 Nama</th>
                            <th>📂 Kategori</th>
                            <th>📝 Deskripsi</th>
                            <th>📸 Bukti</th>
                            <th>📌 Status</th> 
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->name }}</td>
                                <td>{{ $report->category }}</td>
                                <td>{{ $report->description }}</td>
                                <td>
                                    @if ($report->proof)
                                        <a href="{{ asset("storage/{$report->proof}") }}" target="_blank" class="btn btn-outline-light btn-sm">Lihat Bukti</a>
                                    @else
                                        Tidak ada bukti
                                    @endif
                                </td>
                                <td>
                                    @if ($report->status == 'Diterima')
                                        <span class="badge bg-success">✔ Diterima</span>
                                    @elseif ($report->status == 'Ditolak')
                                        <span class="badge bg-danger">❌ Ditolak</span>
                                    @else
                                        <span class="badge bg-warning">⏳ Menunggu</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
