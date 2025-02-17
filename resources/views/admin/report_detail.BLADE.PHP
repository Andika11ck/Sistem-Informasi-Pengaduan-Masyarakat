@extends('layouts.base')

@section('title', 'Detail Laporan')
    
 @section('contents')
    <div class="container mt-5">
        <h1>Detail Laporan</h1>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <tr>
                        <th>Nama</th>
                        <td>{{ $report->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $report->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $report->phone }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $report->address }}</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>{{ $report->category }}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>{{ $report->description }}</td>
                    </tr>
                    <tr>
                        <th>Bukti</th>
                        <td>
                            @if ($report->proof)
                                <a href="{{ asset('storage/' . $report->proof) }}" target="_blank">Lihat Bukti</a>
                            @else
                                Tidak ada bukti
                            @endif
                        </td>
                    </tr>


                </table>
            </div>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
    </div>

@endsection