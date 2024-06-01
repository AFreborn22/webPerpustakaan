@extends('layout.main')

@section('container')
        <!-- judul PMB -->
        <header class="judul-bantuan">
            <h1>Panduan <span>Menu</span></h1>
        </header>

        {{-- @php
            dd('halo')
        @endphp --}}

        <!-- isi PMB -->
        <div class="container-pmb">
            <a href="/CaraRegistrasi">
                <h3>> Registrasi / Sign Up</h3>
            </a>
            {{-- <a href="/CaraEditProfil">
                <h3>> Edit Profile</h3>
            </a> --}}
            <a href="/CaraPinjam">
                <h3>> Peminjaman Buku</h3>
            </a>
        </div>
@endsection
