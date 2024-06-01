@extends('staff.layouts.mainStaff')

@section('konten')
    
<h2 class="home_page"><b>DATA TRANSAKSI</b></h2>
<a href="/staff/tambahTransaksi">
    <button class="btn btn-warning text-white mt-2 mb-4"><b>Tambah Transaksi</b></button>
</a>
    <div class="mb-3">
      <!-- Form untuk fitur pencarian -->
      <form>
        <div class="form-row">
          <div class="rounded col-md-12 mb-3 d-flex align-items-center justify-content-between">
            <form action="/staff/dataTransaksi" method="GET">
                <input type="search" class="form-control mx-2 border-2" id="inputCari" name="search" placeholder="Cari Data Transaksi...">
                <div class="input-group-append">
                    <button class="rounded text-white mx-2" type="submit" style="background: #3A0561">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </form>
          </div>
        </div>
      </form>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <table class="table table-bordered text-white rounded-table mt-5" style="background: #3A0561">
        <thead>
            <tr class="text-center">
                <th class="py-2">No</th>
                <th class="py-2">ID Transaksi</th>
                <th class="py-2">Nama Anggota</th>
                <th class="py-2">Judul Buku</th>
                <th class="py-2">Tanggal Pinjam</th>
                <th class="py-2">Tanggal Harus Kembali</th>
                <th class="py-2">Status</th>
                <th class="py-2">Aksi</th>
            </tr>
        </thead>
        @foreach ($dataTransaksi as $dt)
        <tbody>
            <tr class="text-center">
                <td class="py-1">{{ $loop->iteration }}</td>
                <td class="py-1">{{ str_pad($dt->id, 4, '0', STR_PAD_LEFT) }}</td>
                <td class="py-1">
                    @if ($dt->mahasiswa)
                        {{ $dt->mahasiswa->Nama }}
                    @elseif ($dt->dosen)
                        {{ $dt->dosen->nama_dosen }}
                    @else
                        Tidak Diketahui
                    @endif
                </td>
                <td class="py-1">{{ $dt->Judul }}</td>
                <td class="py-1">{{ $dt->tanggal_pinjam }}</td>
                <td class="py-1">{{ $dt->tanggal_kembali }}</td>
                <td class="py-1">{{ $dt->status }}</td>
                <td class="py-1 justify-content-between">
                    <div class="d-flex justify-content-between">
                        <a href="/staff/{{ $dt->id }}/editTransaksi">
                            <button class="btn btn-primary btn-sm mx-1">Edit</button>
                        </a>
                        <form action="/staff/{{ $dt->id }}/updateStatus" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success btn-sm mx-1">Ubah Status</button>
                        </form>
                        <form action="/staff/{{ $dt->id }}/destroyTransaksi" method="POST" onsubmit="return confirmDelete(event)">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mx-1">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

@endsection