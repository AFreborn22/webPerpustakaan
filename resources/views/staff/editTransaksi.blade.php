@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>EDIT TRANSAKSI</b></h2>
<div class="container-fluid mt-5 shadow custom-container" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/{{ $editTransaksi->id }}/updateTransaksi" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="NIM" class="form-label">NIM:</label>
                    <input type="text" name="NIM" id="NIM" value="{{ $editTransaksi->NIM }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Mahasiswa:</label>
                    <input type="text" name="Nama" id="Nama" value="{{ $editTransaksi->Nama }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="NIK_dosen" class="form-label">NIK Dosen:</label>
                    <input type="text" name="NIK_dosen" id="NIK_dosen" value="{{ $editTransaksi->NIK_dosen }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen:</label>
                    <input type="text" name="nama_dosen" id="nama_dosen" value="{{ $editTransaksi->nama_dosen }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="ISBN" class="form-label">ISBN:</label>
                    <input type="text" name="ISBN" id="ISBN" value="{{ $editTransaksi->ISBN }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Judul" class="form-label">Judul:</label>
                    <input type="text" name="Judul" id="Judul" value="{{ $editTransaksi->Judul }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam:</label>
                    <input type="datetime-local" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ date('Y-m-d\TH:i', strtotime($editTransaksi->tanggal_pinjam)) }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali:</label>
                    <input type="datetime-local" name="tanggal_kembali" id="tanggal_kembali" value="{{ date('Y-m-d\TH:i', strtotime($editTransaksi->tanggal_kembali)) }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="Diproses" {{ $editTransaksi->status === 'Diproses' ? 'selected' : '' }}>Diproses</option>
                        <option value="Dipinjam" {{ $editTransaksi->status === 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="Dikembalikan" {{ $editTransaksi->status === 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                    </select>
                </div>
                <div class="btn-container mb-5">
                    <a href="/staff/dataTransaksi">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection