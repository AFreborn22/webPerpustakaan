@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>EDIT BUKU</b></h2>
<div id="formContainer" class="container-fluid mt-4 mb-5 shadow" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/{{ $editBuku->ISBN }}/updateBuku" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="ISBN">ISBN :</label>
                    <input type="text" class="form-control" name="ISBN" required value="{{ $editBuku->ISBN }}">
                </div>
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" class="form-control" name="Judul" required value="{{ $editBuku->Judul }}">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang :</label>
                    <input type="text" class="form-control" name="Pengarang" required value="{{ $editBuku->Pengarang }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit :</label>
                    <input type="text" class="form-control" name="Penerbit" required value="{{ $editBuku->Penerbit }}">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit :</label>
                    <input type="number" class="form-control" name="Tahun_Terbit" required value="{{ $editBuku->Tahun_Terbit }}">
                </div>
                <div class="form-group">
                    <label for="jumlah_stok">Jumlah Stok :</label>
                    <input type="number" class="form-control" name="Jumlah_Stok" required value="{{ $editBuku->Jumlah_Stok }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi : </label>
                    <textarea class="form-control" name="deskripsi" rows="4" required>{{ $editBuku->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="cover">Masukkan Cover Buku :</label>
                    <input type="file" class="form-control" name="cover">
                    @if($editBuku->cover)
                        <div>
                            <img src="{{ asset('storage/'.$editBuku->cover) }}" alt="Cover Buku" style="width: 200px; height: 300px">
                        </div>
                    @endif
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