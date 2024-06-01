@extends('layout.maindosen')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="/CSS/stylebagas.css">
@endsection

@section('konten')
<div class="height-100">
    <h3 class="detailpinjam_page"><b>DETAIL PEMINJAMAN</b></h3>
    <div class="container container-detailpinjam">
        <div class="detailpinjam">
            <h4><b>PEMINJAMAN BERHASIL!!!</b></h4>
            <br>
            <img src="{{ asset('storage/' . $buku->cover) }}" class="card-img-top rounded" alt="Gambar Buku">
            <br><br>
            <h5><b>Buku bisa diambil di Resource Centre, Lt. 1, Gedung V</b></h5>

            <hr>
            <h5 class="pengambilan-buku">Untuk Pengambilan Buku, bisa menyesuaikan Jadwal Layanan Resource Centre.</h5>
            <div class="card card-layanan" style="width: 18rem;">
                <div class="card-header">
                    <b>JADWAL LAYANAN</b>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">SENIN - JUMAT <br>07.00 - 16.30 WIB</li>

                    <li class="list-group-item">JUMAT <br> Istirahat 11.30 - 13.30 WIB</li>
                    <li class="list-group-item">SABTU <br> 08.00 - 15.30 WIB</li>
                </ul>
            </div>

        </div>
        <form id="ambil-form" action="{{ route('transaksi.storeDosen') }}" method="POST">
            @csrf
            @php
                $popup = isset($lastStatus) && $lastStatus === 'Dipinjam';
            @endphp
            <input type="hidden" name="nik" value="{{ session('nik') }}">
            <input type="hidden" name="nama" value="{{ session('nama') }}">
            <input type="hidden" name="judulBuku" value="{{ session('judulBuku') }}">
            <input type="hidden" name="isbn" value="{{ session('ISBN') }}">
            <input type="hidden" name="borrow-date" value="{{ session('borrow_date') }}">
            <input type="hidden" name="return-date" value="{{ session('return_date') }}">
            <a href="{{ route('homedosen', ['popup' => $popup ? 'false' : 'true']) }}">
                <button type="submit" class="submit-btn-pinjam" id="btn-mengerti">Mengerti</button>
            </a>

        </form>

    </div>
    <script src="JS/back.js"></script>
    <script>
        document.getElementById('btn-mengerti').addEventListener('click', function() {
                // Mengirim data ke URL /transaksis menggunakan metode POST
                fetch('{{ route('transaksi.storeDosen') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            _token: '{{ csrf_token() }}',
                        }),
                    })
                    .then(response => {
                        // Handle response jika diperlukan
                    })
                    .catch(error => {
                        // Handle error jika diperlukan
                    });

                // Menghapus session setelah tombol "Sudah Diambil" ditekan

            });

            document.getElementById('btn-mengerti').addEventListener('click', function() {
                // Submit form untuk menyimpan ke tabel transaksi
                document.getElementById('ambil-form').submit();
            });
    </script>
@endsection
