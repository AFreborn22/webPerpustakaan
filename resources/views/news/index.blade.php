@extends('layout.mainAdmin')

@section('konten')
<div class="m-3">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
        <h1 class="tambahberita">Tambah Berita</h1>
    </div>
    
    
    <div class="container">
        @if (session()->has('success')) 
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/berita/edit/create" class="btn btn-warning text-bold">BUAT BARU</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Konten Berita</th>
                        <th scope="col">Gambar Berita</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($editBerita as $berita)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="index-titik">{{ $berita->judul_berita }}</td>
                            <td class="index-titik">{{ $berita->konten }}</td>
                            <td class="index-titik">{{ $berita->URL_gambar }}</td>
                            <td>
                                <a href="/berita/edit/{{ $berita->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                                <a href="/berita/edit/{{ $berita->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/berita/edit/{{ $berita->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus berita?')"><span data-feather="x-circle"></span></button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection