@extends('layout.main')

@section('container')
    <!-- judul panduan masuk -->
    <div class="judulsekilas">
        <h1 class="judulnya">
            Yuk Simak <span>Panduan Masuknya</span> Supaya Gak Salah !
        </h1>
    </div>

    <!-- panduan masuk -->
    <div class="isi-panduan">

        @foreach ($editTatamasuk as $masuk)
            <div class="container">
                <img src="{{ asset('storage/' . $masuk->URL_gambar) }}" alt="Panduan Masuk">
            </div>
        @endforeach
    </div>
@endsection()