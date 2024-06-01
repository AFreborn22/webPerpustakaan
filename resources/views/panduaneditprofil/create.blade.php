@extends('layout.mainAdmin')

@section('konten')
    <div class="m-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
            <h1 class="tambahpanduaneditprofil">Tambah Panduan Edit Profil</h1>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="/panduan/editprofil" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    <input type="text"
                        class="form-control @error('konten')
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
                    <label for="URL_gambar" class="form-label">Upload Gambar Panduan</label>
                    <input class="form-control @error('URL_gambar')
                is-invalid
                @enderror"
                        type="file" id="URL_gambar" name="URL_gambar">
                    @error('URL_gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
@endsection
