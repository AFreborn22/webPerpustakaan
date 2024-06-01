@extends('layout.mainAdmin')

@section('konten')
<div class="m-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
        <h1 class="carousel">Edit Carousel</h1>
    </div>
 
    <div class="col-lg-8">
        <form action="/carousel/buku/{{ $editCarousel->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Isi bagian lain dari formulir Anda -->
            <div class="mb-3">
                <label for="gambar" class="form-label">Ganti Gambar Carousel</label> 
                    <input type="hidden" name="oldImage" value="{{ $editCarousel->gambar }}">
                <input class="form-control @error('gambar')
                is-invalid
                @enderror" type="file" id="gambar" name="gambar">
                @error('gambar')
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