@extends('layout.mainAdmin')

@section('konten')
    <div class="m-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
            <h1 class="bantuan">Tambah Bantuan</h1>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="/bantuan/edit" >
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text"
                        class="form-control @error('judul')
                is-invalid
                @enderror"
                        id="judul" name="judul" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <input type="text"
                        class="form-control @error('isi')
                is-invalid
                @enderror"
                        id="isi" name="isi" value="{{ old('isi') }}">
                    @error('isi')
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
