@extends('layout.mainAdmin')

@section('konten')
    <div class="m-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
            <h1 class="sekilas">Tambah Sekilas</h1>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="/sekilas/edit" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="kontensatu" class="form-label">Konten 1</label>
                    <input type="text"
                        class="form-control @error('kontensatu')
                is-invalid
                @enderror"
                        id="kontensatu" name="kontensatu" value="{{ old('kontensatu') }}">
                    @error('kontensatu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kontendua" class="form-label">Konten Dua</label>
                    <input type="text"
                        class="form-control @error('kontendua')
                is-invalid
                @enderror"
                        id="kontendua" name="kontendua" value="{{ old('kontendua') }}">
                    @error('kontendua')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="URL_gambar" class="form-label">Upload Gambar</label>
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
