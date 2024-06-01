@extends('layout.main')

@section('container')
    <article class="membaca">
        <div class="yuk">
            <h2>Langkah-Langkah Mengedit <span>Profile</span> !</h2>
        </div>
    </article>

    <div class="container">
        @foreach ($editPanduanEprofil as $profil)
            <h4>{{ $profil->konten }}</h4>
                <div>
                    <img src="{{ asset('storage/' . $profil->URL_gambar) }}" alt="pertama" class="image">
                </div>
            <br>
            <br>
        @endforeach
    </div>
@endsection
