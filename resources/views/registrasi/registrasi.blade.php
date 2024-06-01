@extends('layout.main')

@section('container')
    <article class="membaca">
        <div class="yuk">
            <h2>Langkah-Langkah Melakukan <span>Sign Up</span> !</h2>
        </div>
    </article>

    <div class="container">
        @foreach ($editPanduanRegistrasi as $registrasi)  
            <h4>{{ $registrasi->konten }}</h4>
            <div>
                <img src="{{ asset('storage/' . $registrasi->URL_gambar) }}" alt="pertama" class="image">
            </div>
            <br>
            <br>
        @endforeach
    </div>
@endsection
