<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        {{ $title }}
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('books.create') }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Nama Buku</label>
                                        <input type="text" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $value['name'] }}" placeholder="First Name" name="name" />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Nama Buku</label>
                                        <input type="text" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $value['name'] }}" placeholder="First Name" name="name" />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="author">Penulis</label>
                                        <input type="text" id="author" class="form-control @is_invalid('author')"
                                            value="{{ $value['author'] }}" placeholder="Nama Penulis" name="author" />
                                        @include('components.invalid-feedback', [
                                            'message' => $errors->first('author'),
                                        ])
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control @is_invalid('description')">{{ $value['description'] }}</textarea>
                                        @include('components.invalid-feedback', [
                                            'message' => $errors->first('description'),
                                        ])
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="publisher">Penerbit</label>
                                        <input type="text" id="publisher" class="form-control @is_invalid('publisher')"
                                            placeholder="Nama/Tempat Penerbit" name="publisher"
                                            value="{{ $value['publisher'] }}" />
                                        @include('components.invalid-feedback', [
                                            'message' => $errors->first('publisher'),
                                        ])
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <input type="file" id="image" class="form-control @is_invalid('image')"
                                            name="image" placeholder="Masukkan Gambar"
                                            value="{{ $value['image'] }}" />
                                        @include('components.invalid-feedback', [
                                            'message' => $errors->first('image'),
                                        ])
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
