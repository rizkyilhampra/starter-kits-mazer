@extends('layouts.layout-vertical.main')
@section('title', 'Books')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Vertical Layout with Navbar</h3>
                    <p class="text-subtitle text-muted">
                        Navbar will appear on the top of the page.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Layout Vertical Navbar
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Simple Datatable
                    </h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3 d-block-inline" type="button">
                        Tambah Data
                    </a>
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->publisher }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>
                                        <img src="{{ $book->image }}" class="img-fluid" alt="">
                                    </td>
                                    <td>{{ $book->book_categories }}</td>
                                    <td>{{ $book->published_date }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('library-css')
    <link rel="stylesheet" href="{{ asset('assets/extension/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/table-datatable.css') }}" />
@endpush

@push('library-js')
    <script src="{{ asset('assets/extension/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/simple-datatables.js') }}"></script>
@endpush
