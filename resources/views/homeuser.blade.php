@extends('layout.mainuser')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/stylebagas.css">
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>DASHBOARD</b></h3>

        <div class="container-welcome">
            <img src="ASSETS/welcome-animate.svg" alt="" class="welcome-flat">
        </div>
        <h4 class="home_page" style="text-align: center"><b>Hallo, {{ session('nama') }}!</b></h4>
        <h4 class="home_page" style="text-align: center">Selamat Datang di Halaman Dashboard Mahasiswa</h4>


    </div>
    <br /><br />

    <button class="button-popup" id="button-popup" style="{{ $lastStatus === 'Dipinjam' || $lastStatus === 'Dikembalikan'  ? 'display:none;' : 'visibility:visible;' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-ticket-detailed" viewBox="0 0 16 16">
            <path
                d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z" />
            <path
                d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z" />
        </svg>
    </button>

    <div class="popup" id="popup" >
        <div class="popup-content">
            <h5><b>TIKET PENGAMBILAN!</b></h5>
            <hr>

            <img src="{{ session('cover') }}" class="card-img-top rounded" alt="">
            <br><br>
            <h6><b>NIM Peminjam</b></h6>
            <h6 id="nim">{{ session('nim') }}</h6>
            <h6><b>Judul</b></h6>
            <h6 id="judulBuku">{{ session('judulBuku') }}</h6>
            <h6><b>ID Buku</b></h6>
            <h6 id="id-buku">{{ session('ISBN') }}</h6>
            <hr>
            <h6 class="pengambilan-buku"><b>Tunjukkan tiket ini ke pegawai.</b></h6>

        </div>
    </div>

    <script src="JS/home.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const showPopup = urlParams.get("popup");

            if (showPopup === "true") {
                localStorage.setItem("showPopup", "true");
            }

            const storedShowPopup = localStorage.getItem("showPopup");

            if (storedShowPopup === "true") {
                const buttonPopup = document.getElementById("button-popup");
                buttonPopup.style.visibility = "visible";
            }

            const buttonPopup = document.getElementById('button-popup');
            const popup = document.getElementById('popup');

            buttonPopup.addEventListener('click', function() {
                popup.classList.add('show-popup'); /* Add the "show-popup" class to display the popup */
            });

            popup.addEventListener('click', function() {
                popup.classList.remove('show-popup'); /* Remove the "show-popup" class to hide the popup */
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            var button = document.querySelector('.button-popup');
            var popup = document.querySelector('.popup');

            button.addEventListener('click', function() {
                popup.classList.add(
                    'show-popup'); /* Tambahkan kelas "show-popup" saat pop-up ditampilkan */
            });

            popup.addEventListener('click', function() {
                popup.classList.remove(
                    'show-popup'); /* Hapus kelas "show-popup" saat pop-up disembunyikan */
            });
        });
    </script>
@endsection
