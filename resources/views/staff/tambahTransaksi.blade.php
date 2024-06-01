@extends('staff.layouts.mainStaff')

@section('konten')
<h2 class="home_page"><b>TAMBAH TRANSAKSI</b></h2>
<div class="container-fluid mt-5 shadow custom-container" style="background: white">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="/staff/storeTransaksi" method="post">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="NIM" class="form-label">NIM:</label>
                    <select name="NIM" id="NIM" class="form-select">
                        <option value="">Pilih NIM Mahasiswa</option> <!-- Opsi kosong, nilai value kosong -->
                        @foreach ($mahasiswas as $mahasiswa)
                            <option value="{{ $mahasiswa->NIM }}">{{ $mahasiswa->NIM }} - {{ $mahasiswa->Nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Mahasiswa:</label>
                    <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Nama Mahasiswa">
                </div>
                <div class="mb-3">
                    <label for="NIK_dosen" class="form-label">NIK Dosen:</label>
                    <select name="NIK_dosen" id="NIK_dosen" class="form-select">
                        <option value="">Pilih NIK Dosen</option> <!-- Opsi kosong, nilai value kosong -->
                        @foreach ($dosens as $dosen)
                            <option value="{{ $dosen->NIK_dosen }}">{{ $dosen->NIK_dosen }} - {{ $dosen->nama_dosen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen:</label>
                    <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="Nama Dosen">
                </div>
                <div class="mb-3">
                    <label for="ISBN" class="form-label">ISBN:</label>
                    <select name="ISBN" id="ISBN" class="form-select">
                        <option value="">Pilih Buku</option> <!-- Opsi kosong, nilai value kosong -->
                        @foreach ($bukus as $buku)
                            <option value="{{ $buku->ISBN }}">{{ $buku->ISBN }} - {{ $buku->Judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Judul" class="form-label">Judul:</label>
                    <input type="text" name="Judul" id="Judul" class="form-control" placeholder="Judul Buku">
                </div>
                <div class="mb-3">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam:</label>
                    <input type="datetime-local" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali:</label>
                    <input type="datetime-local" name="tanggal_kembali" id="tanggal_kembali" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="Diproses">Diproses</option>
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                </div>
                <div class="btn-container mb-5">
                    <a href="/staff/dataTransaksi">
                        <button type="button" class="btn text-white mt-3" style="background: #3A0561">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-warning text-white mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection