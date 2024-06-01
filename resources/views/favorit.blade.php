@extends('layout.mainuser')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/stylebagas.css">
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>BUKU FAVORIT</b></h3>
        <div class="content-favorit">
            <table class="table_favorit">
                <tr>
                    <th>No.</th>
                    <th>Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
                @isset($bukus)
                @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $buku->cover_buku }}" alt=""></td>
                    <td>{{ $buku->Judul }}</td>
                    <td>{{ $buku->Pengarang }}</td>
                    <td>{{ $buku->Penerbit }}</td>
                    <td>    
                        <a href="{{ route('favorit.detail', $buku->ISBN) }}"
                            style="color: rgb(195, 0, 255);">Lihat</a>
                    </td>
                </tr>
            @endforeach
                @endisset
                




            </table>
        </div>
    </div>
    <script src="JS/back.js"></script>
@endsection
