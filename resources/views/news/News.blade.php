@extends('layout.main')

@section('container')
    <!-- judul berita -->
    <header class="judul-berita">
        <h1><span>Berita</span> Hari Ini</h1>
    </header>

    <div class="container">
        @foreach ($editBerita as $berita)
            
            <div class="berita">
                <h1 class="berita">{{ $berita->judul_berita }}</h1>
            </div>
            
            <div class="gambarberita">
                <img src="{{ asset( 'storage/' . $berita->URL_gambar ) }}" alt="gambarberita">
            </div>
            
            <div class="kontenberita">
                <p class="isiberita">{{ $berita->konten }}</p>
            </div>
        @endforeach

    </div>
@endsection
