@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>EDIT MAJALAH</b></h2>
<div id="formContainer" class="container-fluid mt-4 mb-5 shadow" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/{{ $editMajalah->ISSN }}/updateMajalah" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="ISSN">ISSN :</label>
                    <input type="text" class="form-control" name="ISSN" required value="{{ $editMajalah->ISSN }}">
                </div>
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" class="form-control" name="judul" required value="{{ $editMajalah->judul }}">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis :</label>
                    <input type="text" class="form-control" name="penulis" required value="{{ $editMajalah->penulis }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit :</label>
                    <input type="text" class="form-control" name="penerbit" required value="{{ $editMajalah->penerbit }}">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit :</label>
                    <input type="number" class="form-control" name="tahun_terbit" required value="{{ $editMajalah->tahun_terbit }}">
                </div>
                <div class="form-group">
                    <label for="cover">Masukkan Cover Majalah :</label>
                    <input type="file" class="form-control" name="cover">
                    @if($editMajalah->cover)
                        <div>
                            <img src="{{ asset('storage/'.$editMajalah->cover) }}" alt="Cover Majalah" style="width: 200px; height: 300px">
                        </div>
                    @endif
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