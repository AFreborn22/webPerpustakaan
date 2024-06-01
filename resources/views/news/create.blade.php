@extends('layout.mainAdmin')

@section('konten')
    <div class="m-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
            <h1 class="tambahberita">Tambah Berita</h1>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="/berita/edit" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul_berita" class="form-label">Judul Berita</label>
                    <input type="text"
                        class="form-control @error('judul_berita')
                is-invalid
                @enderror"
                        id="judul_berita" name="judul_berita" value="{{ old('judul_berita') }}">
                    @error('judul_berita')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="konten" class="form-label">Isi Konten</label>
                    <input type="text"
                        class="form-control mb-3 @error('konten')
              is-invalid
              @enderror"
                        id="konten" name="konten" >
                    @error('konten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="URL_gambar" class="form-label">Upload Gambar Berita</label>
                    <input class="form-control @error('URL_gambar')
                    is-invalid
                    @enderror" type="file" id="URL_gambar" name="URL_gambar">
                    @error('URL_gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
