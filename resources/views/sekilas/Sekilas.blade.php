@extends('layout.main')

@section('container')
    @foreach ($sekilas as $sekilas)
        <div class="judulsekilas">
            <h1 class="judulnya">
                Sekilas <span>Tentang Kami</span>
            </h1>

            <p id="welcome">{{ $sekilas->kontendua }}</>
            </p>
        </div>

        <div class="container-gambar">
            <div class="linear-atas"></div>
            <img src="{{ asset('storage/' . $sekilas->URL_gambar) }}" alt="perpus">
            <div class="linear-bawah"></div>
        </div>

        <footer class="sekilas">
            <h1><span>Membaca</span> Semakin Mudah</h1>

            <p class="bawahnya">Baca buku, berbagi koleksi bacaan dan bersosialisasi secara
                bersamaan. Di mana pun, kapan pun dengan nyaman bersama
                setiap orang.</p>

            <p class="jelasan">{{ $sekilas->kontensatu }}</p>
        </footer>

        <footer class="f-bawah" id="p-sekilas">
            <p>Copyright 2023 © National Library Of Indonesia</p>
        </footer>
    @endforeach
@endsection
