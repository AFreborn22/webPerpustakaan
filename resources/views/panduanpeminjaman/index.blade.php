@extends('layout.mainAdmin')

@section('konten')
<div class="m-3">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
        <h1 class="tambahpanduanpinjam">Tambah Panduan Peminjaman</h1>
    </div>
    
    
    <div class="container">
        @if (session()->has('success')) 
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/panduan/peminjaman/create" class="btn btn-warning text-bold">BUAT BARU</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($editPanduanPeminjaman as $panduanPinjam)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="index-titik">{{ $panduanPinjam->konten }}</td>
                            <td class="index-titik">{{ $panduanPinjam->URL_gambar }}</td>
                            <td>
                                <a href="/panduan/peminjaman/{{ $panduanPinjam->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                                <a href="/panduan/peminjaman/{{ $panduanPinjam->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/panduan/peminjaman/{{ $panduanPinjam->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus konten?')"><span data-feather="x-circle"></span></button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection