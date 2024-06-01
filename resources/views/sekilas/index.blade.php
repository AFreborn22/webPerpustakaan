@extends('layout.mainAdmin')

@section('konten')
<div class="m-3">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap">
        <h1 class="tambahsekilas">Tambah Sekilas</h1>
    </div>
    
    
    <div class="container">
        @if (session()->has('success')) 
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/sekilas/edit/create" class="btn btn-warning text-bold">BUAT BARU</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Konten 1</th>
                        <th scope="col">Konten 2</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($sekilas as $sekilas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="index-titik">{{ $sekilas->kontensatu }}</td>
                            <td class="index-titik">{{ $sekilas->kontendua }}</td>
                            <td class="index-titik">{{ $sekilas->URL_gambar }}</td>
                            <td>
                                <a href="/sekilas/edit/{{ $sekilas->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                                <a href="/sekilas/edit/{{ $sekilas->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/sekilas/edit/{{ $sekilas->id }}" method="post" class="d-inline">
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