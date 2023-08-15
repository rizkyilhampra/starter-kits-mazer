@extends('layouts.layout-vertical.main')
@section('title', 'Books')

@section('content')
    <div class="page-heading">
        @component('components.page-title')
            @slot('title', 'Data Buku')
            @slot('subtitle', 'Halaman data buku')
            <li class="breadcrumb-item active" aria-current="page">Books</li>
        @endcomponent
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
                    @component('components.table')
                        @slot('column')
                            <th>Nama Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Tanggal Publikasi</th>
                            <th>Aksi</th>
                        @endslot
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>{{ $book->description }}</td>
                                <td><img src="{{ $book->image }}" class="img-fluid" alt="{{ $book->name }}"></td>
                                <td>{{ $book->book_categories }} </td>
                                <td>{{ $book->published_date }}</td>
                                <td>
                                    @include('components.edit-delete-action', [
                                        'routeEdit' => route('books.edit', $book->id),
                                        'routeDelete' => route('books.destroy', $book->id),
                                    ])
                                </td>
                            </tr>
                        @endforeach
                    @endcomponent
                </div>
            </div>
        </section>
    </div>
@endsection

@include('components.sa-warning')
