@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>TAMBAH MAJALAH</b></h2>
<div id="formContainer" class="container-fluid mt-4 mb-5 shadow" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/storeMajalah" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="ISSN">ISSN :</label>
                    <input type="text" class="form-control" name="ISSN" placeholder="Masukkan ISSN...">
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
                    <label for="penerbit">Penerbit :</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit...">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit :</label>
                    <input type="number" class="form-control" name="tahun_terbit" placeholder="Tahun">
                </div>
                <div class="form-group">
                    <label for="cover">Masukkan Cover Majalah :</label>
                    <input type="file" class="form-control" name="cover" id="uploadFile" accept="image/*">
                    <div id="preview"></div>
                </div>               

                <div class="btn-container mt-3 mb-4">
                    <a href="/staff/dataMajalah">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection