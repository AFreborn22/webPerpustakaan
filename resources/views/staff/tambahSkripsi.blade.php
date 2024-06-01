@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>TAMBAH SKRIPSI</b></h2>
<div id="formContainer" class="container-fluid mt-4 mb-5 shadow" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/storeSkripsi" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="id">ID :</label>
                    <input type="text" class="form-control" name="id" placeholder="Masukkan ID...">
                </div>
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul...">
                </div>
                <div class="form-group">
                    <label for="pengarang">Penulis :</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Masukkan Penulis...">
                </div>
                <div class="form-group">
                    <label for="tahun_publikasi">Tahun Publikasi :</label>
                    <input type="number" class="form-control" name="tahun_publikasi" placeholder="Tahun">
                </div>
                <div class="form-group">
                    <label for="cover">Masukkan Cover Skripsi :</label>
                    <input type="file" class="form-control" name="cover" id="uploadFile" accept="image/*">
                    <div id="preview"></div>
                </div>               

                <div class="btn-container mt-3 mb-4">
                    <a href="/staff/dataSkripsi">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection