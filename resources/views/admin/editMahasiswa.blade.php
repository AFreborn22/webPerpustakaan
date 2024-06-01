@extends('admin.layouts.mainAdmin')

@section('konten')
<h2 class="home_page"><b>EDIT MAHASISWA</b></h2>
<div class="container-fluid mt-5 shadow custom-container" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/admin/{{ $editMahasiswa->NIM }}/updateMahasiswa" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nim">NIK :</label>
                    <input type="text" class="form-control" id="nim" name="NIM" disabled readonly value="{{ $editMahasiswa->NIM }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="Nama" required value="{{ $editMahasiswa->Nama }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $editMahasiswa->email }}">
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="Username" disabled readonly value="{{ $editMahasiswa->Username }}">
                    {{-- <span class="toggle-password" onclick="togglePasswordVisibility()"> <span class="icon-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                          <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                          <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                        </svg>
                       </span></span> --}}
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="Password" name="Password" disabled readonly value="{{ $editMahasiswa->Password }}">
                </div>
                <div class="btn-container">
                    <a href="/admin/dataMahasiswa">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection