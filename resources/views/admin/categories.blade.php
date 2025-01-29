@extends('layouts.blank')
@section('title', 'Master Data Kategori')
    


@section('contents')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->


        <h2 class="mt-5">Master Data Kategori</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" name="category" class="form-control" placeholder="Nama Kategori" required>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $category->name }}
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>


    </div>
    <!-- /.container-fluid -->
@endsection
