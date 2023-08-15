@extends('layouts.layout-vertical.main')
@section('title', 'Edit Book')
@section('content')
    <div class="page-heading">
        @component('components.page-title')
            @slot('title', 'Ubah Buku')
            @slot('subtitle', 'Halaman ubah data buku')
            <li class="breadcrumb-item ">
                <a href="{{ route('books.index') }}">Books</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Buku</li>
        @endcomponent

        @include('components.form', [
            'method' => 'POST',
            'overrideMethod' => 'PUT',
            'route' => route('books.update', $book->id),
            'formGroup' => [
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Nama Buku',
                    'invalidFeedback' => $errors->first('name'),
                    'field' => view('components.input', [
                        'type' => 'text',
                        'name' => 'name',
                        'value' => $book->name,
                        'placeholder' => 'Masukkan Nama Buku',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Penulis',
                    'invalidFeedback' => $errors->first('autthor'),
                    'field' => view('components.input', [
                        'type' => 'text',
                        'name' => 'author',
                        'value' => $book->author,
                        'placeholder' => 'Masukkan Nama Penulis',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-12',
                    'label' => 'Deskripsi',
                    'invalidFeedback' => $errors->first('description'),
                    'field' => view('components.textarea', [
                        'name' => 'description',
                        'value' => $book->description,
                        'placeholder' => 'Masukkan Deskripsi',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Penerbit',
                    'invalidFeedback' => $errors->first('publisher'),
                    'field' => view('components.input', [
                        'type' => 'text',
                        'name' => 'publisher',
                        'value' => $book->publisher,
                        'placeholder' => 'Masukkan Nama Penerbit',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Tanggal Publikasi',
                    'invalidFeedback' => $errors->first('published_at'),
                    'field' => view('components.input', [
                        'type' => 'date',
                        'name' => 'published_at',
                        'value' => $book->published_date,
                        'placeholder' => 'Masukkan Tanggal Publikasi',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Kategori',
                    'invalidFeedback' => $errors->first('book_category_id'),
                    'field' => view('components.select-option', [
                        'name' => 'book_category_id',
                        'key' => true,
                        'placeholder' => 'Pilih Kategori',
                        'required' => true,
                        'options' => \App\Models\Books::$bookCategories,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Gambar',
                    'invalidFeedback' => $errors->first('image'),
                    'field' => view('components.input', [
                        'type' => 'file',
                        'name' => 'image',
                        'value' => $book->image,
                        'placeholder' => 'Masukkan Gambar',
                        'required' => true,
                    ]),
                ]),
            ],
        ])
    </div>
@endsection
