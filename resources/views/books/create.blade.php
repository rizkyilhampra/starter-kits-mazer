@extends('layouts.layout-vertical.main')
@section('title', 'Create Books')
@section('content')
    <div class="page-heading">
        @component('components.page-title')
            @slot('title', 'Tambah Data Buku')
            @slot('subtitle', 'Halaman tambah data buku')
            <li class="breadcrumb-item ">
                <a href="{{ route('books.index') }}">Books</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Tambah Data Buku
            </li>
        @endcomponent

        @include('components.form', [
            'method' => 'POST',
            'route' => route('books.store'),
            'formGroup' => [
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Nama Buku',
                    'invalidFeedback' => $errors->first('name'),
                    'field' => view('components.input', [
                        'type' => 'text',
                        'name' => 'name',
                        'value' => old('name'),
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
                        'value' => old('author'),
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
                        'value' => old('description'),
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
                        'value' => old('publisher'),
                        'placeholder' => 'Masukkan Nama Penerbit',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Tanggal Publikasi',
                    'invalidFeedback' => $errors->first('published_date'),
                    'field' => view('components.input', [
                        'type' => 'date',
                        'name' => 'published_date',
                        'value' => old('published_date'),
                        'placeholder' => 'Masukkan Tanggal Publikasi',
                        'required' => true,
                    ]),
                ]),
                view('components.form-group', [
                    'col' => 'col-md-6 col-12',
                    'label' => 'Kategori',
                    'invalidFeedback' => $errors->first('book_categories'),
                    'field' => view('components.select-option', [
                        'name' => 'book_categories',
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
                        'value' => null,
                        'placeholder' => 'Masukkan Gambar',
                        'required' => false,
                    ]),
                ]),
            ],
        ])
    </div>
@endsection
