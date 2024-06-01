@extends('layout.main')

@section('container')
    <article class="membaca">
        <div class="yuk">
            <h2>Langkah-Langkah Meminjam <span>Buku</span> !</h2>
        </div>
    </article>

    <div class="container">
        @foreach ($editPanduanPeminjaman as $pinjam) 
            <h4>{{ $pinjam->konten }}</h4>
                <div>
                    <img src="{{ asset('storage/' . $pinjam->URL_gambar) }}" alt="pertama" class="image">
                </div>
            <br>
            <br>
        @endforeach
    </div>
@endsection
