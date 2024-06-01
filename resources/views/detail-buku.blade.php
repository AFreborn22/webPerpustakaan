@extends('layout.mainuser')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/CSS/stylebagas.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>DETAIL BUKU</b></h3>
        <div class="container-detailbuku">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="card-detail">
                <img src="{{ asset('storage/' . $buku->cover) }}" class="card-img-top rounded" alt="..." />

            </div>
            <div class="col-md-9 ps-4">
                <div class="deskripsi-buku">
                    <table>
                        <tr>
                            <td width="100">Judul</td>
                            <td>:</td>
                            <td>{{ $buku->Judul }}</td>
                        </tr>
                        <tr>
                            <td>ISBN</td>
                            <td>:</td>
                            <td>{{ $buku->ISBN }}</td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td>:</td>
                            <td>{{ $buku->Pengarang }}</td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td>:</td>
                            <td>{{ $buku->Penerbit }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Terbit</td>
                            <td>:</td>
                            <td>{{ $buku->Tahun_Terbit }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td>{{ $buku->Jumlah_Stok }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>{{ $buku->deskripsi }}</td>
                        </tr>
                    </table>
                    <br /><br /><br />
                    <div class="d-flex justify-content-between">
                        <a href="/buku">
                            <button class="btn-kembali" type="button">Kembali</button>
                        </a>
                        <a href="/pinjam-buku">
                            <button class="btn-pinjam" type="button" id="pinjamButton">Pinjam</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->
    <script src="/JS/back.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('pinjamButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default form submission behavior

            var stok = {{ $buku->Jumlah_Stok }};
            var status = "{{ $lastStatus }}";

            if (stok > 0) {
                if (status === 'Diproses' || status === 'Dipinjam') {
                    alert('Tidak bisa meminjam 2 buku');
                } else if (status === 'Dikembalikan' || !status) {
                    // Redirect to the pinjam-buku page
                    window.location.href = '/pinjam-buku';
                } else {
                    
                }
            } else {
                // Show the alert if the book's Jumlah_Stok is 0
                alert('Stok Buku habis');
            }
        });
    </script>
@endsection
