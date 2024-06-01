@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>EDIT SKRIPSI</b></h2>
<div id="formContainer" class="container-fluid mt-4 mb-5 shadow" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/{{ $editSkripsi->id }}/updateSkripsi" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="id">ID :</label>
                    <input type="text" class="form-control" name="id" required value="{{ $editSkripsi->id }}">
                </div>
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" class="form-control" name="judul" required value="{{ $editSkripsi->judul }}">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis :</label>
                    <input type="text" class="form-control" name="penulis" required value="{{ $editSkripsi->penulis }}">
                </div>
                <div class="form-group">
                    <label for="tahun_publikasi">Tahun Terbit :</label>
                    <input type="number" class="form-control" name="tahun_publikasi" required value="{{ $editSkripsi->tahun_publikasi }}">
                </div>
                <div class="form-group">
                    <label for="cover">Masukkan Cover Skripsi :</label>
                    <input type="file" class="form-control" name="cover">
                    @if($editSkripsi->cover)
                        <div>
                            <img src="{{ asset('storage/'.$editSkripsi->cover) }}" alt="Cover Skripsi" style="width: 200px; height: 300px">
                        </div>
                    @endif
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