@extends('layout.mainAdmin')

@section('konten')
        <!-- judul PMB -->
        <header class="judul-bantuan">
            <h1>Panduan <span>Menu</span></h1>
        </header>

        <!-- isi PMB -->
        <div class="container-pmb">
            <a href="/panduan/masuk">
                <h3>> Edit Panduan Masuk</h3>
            </a>
            <a href="/panduan/registrasi">
                <h3>> Edit Panduan Registrasi</h3>
            </a>
            <a href="/bantuan/edit">
                <h3>> Edit Bantuan</h3>
            </a>
        </div>

        <div></div>
@endsection
