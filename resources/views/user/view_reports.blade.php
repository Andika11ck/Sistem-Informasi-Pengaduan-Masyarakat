@extends('layouts.app')

@section('content')
    <div class="container-fluid">
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

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pelaporan Masyarakat</h1>
        <p class="mb-4">Berikut adalah data dari berbagai laporan masyarakat yang ada di Konoha.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan Masyarakat</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Bukti</th>
                                <th>Status</th> 
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
                                            <a href="{{ asset('storage/' . $report->proof) }}" target="_blank">Lihat
                                                Bukti</a>
                                        @else
                                            Tidak ada bukti
                                        @endif
                                    </td>
                                    <td>
                                        @if ($report->status == 'Diterima')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($report->status == 'Ditolak')
                                            <span class="badge bg-danger">Ditolak</span>
                                        @else
                                            <span class="badge bg-warning">Menunggu Persetujuan</span>
                                        @endif
                                    </td>

                                    <!-- Tambahan Status -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
