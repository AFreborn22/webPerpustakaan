@extends('layout.mainAdmin')

@section('konten')
    <div class="m-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
            <h1 class="tambahcarousel">Tambah Carousel</h1>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="/carousel/edit" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="url_gambar" class="form-label">Upload Gambar Carousel</label>
                    <input class="form-control @error('url_gambar')
                is-invalid
                @enderror"
                        type="file" id="url_gambar" name="url_gambar">
                    @error('url_gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
@endsection
