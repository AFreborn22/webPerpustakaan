@extends('layout.mainAdmin')

@section('konten')
<div class="m-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
        <h1 class="panduanmasuk">Edit Panduan Masuk</h1>
    </div>
 
    <div class="col-lg-8">
        <form action="/panduan/masuk/{{ $editTataMasuk->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Isi bagian lain dari formulir Anda -->
            <div class="mb-3">
                <label for="URL_gambar" class="form-label">Ganti Panduan Masuk</label>
                <input class="form-control @error('URL_gambar')
                is-invalid
                @enderror" type="file" id="URL_gambar" name="URL_gambar">
                @error('URL_gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        
    </div>
</div>
    
@endsection