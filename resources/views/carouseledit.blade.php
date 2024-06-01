@extends('layout.mainAdmin')

@section('konten')
        <!-- judul PMB -->
        <header class="judul-bantuan">
            <h1>Panduan <span>Menu</span></h1>
        </header>

        <!-- isi PMB -->
        <div class="container-pmb">
            <a href="/carousel/edit">
                <h3>> Edit Carousel</h3>
            </a>
            <a href="/carousel/buku">
                <h3>> Edit Carousel Buku</h3>
            </a>
        </div>
@endsection
