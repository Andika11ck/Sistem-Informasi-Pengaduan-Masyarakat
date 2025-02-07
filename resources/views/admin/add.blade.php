@extends('layouts.base')

@section('contents')



    <div class="container-fluid">
        <div class="container mt-5">
            <h1>Tambah Admin Baru</h1>
            <form method="POST" action="{{ route('admin.admins.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Admin</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Admin</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Admin</button>
            </form>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mt-3">Kembali ke Dashboard</a>
        </div>
    </div>
@endsection
