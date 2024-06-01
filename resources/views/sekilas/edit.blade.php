@extends('layout.mainAdmin')

@section('konten')
<div class="m-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
        <h1 class="sekilas">Edit Sekilas</h1>
    </div>
 
    <div class="col-lg-8">
        <form action="/sekilas/edit/{{ $sekilas->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Isi bagian lain dari formulir Anda -->
            <div class="mb-3">
                <label for="kontensatu" class="form-label">Konten Satu</label>
                <input type="text" class="form-control @error('kontensatu')
                is-invalid
                @enderror" id="kontensatu" name="kontensatu" required autofocus value="{{ old('kontensatu', $sekilas->kontensatu) }}">
                @error('kontensatu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kontendua" class="form-label">Konten Dua</label>
                <input type="text" class="form-control @error('kontendua')
                is-invalid
                @enderror" id="kontendua" name="kontendua" required autofocus value="{{ old('kontendua', $sekilas->kontendua) }}">
                @error('konten')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="URL_gambar" class="form-label">Ganti Gambar</label>
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