@extends('layouts.base')

@section('contents')
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
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
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
                                <th>Email</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $report->name }}</td>
                                    <td>{{ $report->email }}</td>
                                    <td>
                                        @if ($report->proof)
                                            <a href="{{ asset('storage/' . $report->proof) }}" target="_blank">Lihat
                                                Bukti</a>
                                        @else
                                            Tidak ada bukti
                                        @endif
                                    </td>
                                    <td>
                                        @if ($report->status == 'Menunggu')
                                            <span class="badge badge-warning">Menunggu</span>
                                        @elseif ($report->status == 'Diterima')
                                            <span class="badge badge-success">Diterima</span>
                                        @else
                                            <span class="badge badge-danger">Ditolak</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.reports.detail', $report->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <form action="{{ route('admin.reports.delete', $report->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                        @if ($report->status == 'Menunggu')
                                            <form action="{{ route('admin.reports.approve', $report->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <i class="bi bi-check-circle"></i>
                                                </button>
                                            </form>

                                            <form action="{{ route('admin.reports.reject', $report->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm">
                                                    <i class="bi bi-x-circle "></i>
                                                </button>
                                            </form>
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
