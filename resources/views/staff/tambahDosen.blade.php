@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>TAMBAH DOSEN</b></h2>
<div class="container-fluid mt-5 shadow custom-container" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/storeDosen" method="POST">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="nik">NIK :</label>
                    <input type="text" class="form-control" name="NIK_dosen" placeholder="Masukkan NIK (13 angka)...">
                </div>
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama_dosen" placeholder="Masukkan Nama...">
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" name="Username" placeholder="Masukkan Username...">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email...">
                </div>
                <div class="password-wrapper">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="Password" placeholder="Masukkan Password">
                    {{-- <span class="password-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye mt-3" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </span> --}}
                </div>                
                <div class="btn-container">
                    <a href="/staff/dataDosen">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection