@extends('layout.maindosen')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
<link rel="stylesheet" href="CSS/stylebagas.css">
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>RIWAYAT PEMINJAMAN</b></h3>

        <div class="content-riwayat">
            @if ($riwayat->isEmpty())
                <p>Tidak ada riwayat peminjaman buku.</p>
            @else
                <table class="table-riwayat">
                    <tr>
                        <th>No.</th>
                        <th>ISBN</th>
                        <th>Judul</th>
                        <th>Tgl.Pinjam</th>
                        <th>Tgl.Kembali</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($riwayat as $index => $peminjaman)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $peminjaman->ISBN }}</td>
                            <td class="judul-riwayat">{{ $peminjaman->Judul }}</td>
                            <td>{{ $peminjaman->tanggal_pinjam }}</td>
                            <td>{{ $peminjaman->tanggal_kembali }}</td>
                            <td>{{ $peminjaman->status }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@endsection
