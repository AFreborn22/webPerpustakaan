@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>TAMBAH BUKU</b></h2>
<div id="formContainer" class="container-fluid mt-4 mb-5 shadow" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/storeBuku" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="ISBN">ISBN :</label>
                    <input type="text" class="form-control" name="ISBN" placeholder="Masukkan ISBN...">
                </div>
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" class="form-control" name="Judul" placeholder="Masukkan Judul...">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang :</label>
                    <input type="text" class="form-control" name="Pengarang" placeholder="Masukkan Pengarang...">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit :</label>
                    <input type="text" class="form-control" name="Penerbit" placeholder="Masukkan Penerbit...">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit :</label>
                    <input type="number" class="form-control" name="Tahun_Terbit" placeholder="Tahun">
                </div>
                <div class="form-group">
                    <label for="jumlah_stok">Jumlah Stok :</label>
                    <input type="number" class="form-control" name="Jumlah_Stok" placeholder="Stok">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi : </label>
                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi..." rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="cover">Masukkan Cover Buku :</label>
                    <input type="file" class="form-control" name="cover" id="uploadFile" accept="image/*">
                    <div id="preview"></div>
                    @error('url_gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>               

                <div class="btn-container mt-3 mb-4">
                    <a href="/staff/dataBuku">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Simpan</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection