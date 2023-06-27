@extends('layout.main')

@section('container')
<header class="judul-fitur">
    <h1><span>Berikut</span> Fitur Kami</h1>
  </header>

    <!-- carousel fitur -->
  <div class='wrapper'>
<div class='carousel'>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
      <img src="Login Page.svg" alt="">
      <p>LOGIN</p>
    </div>
  </div>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
      <img src="Sign Up.svg" alt="">
      <p>SIGN UP</p>
    </div>
  </div>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
     <img src="HOME USER.svg" alt="">
     <p>HOME USER</p>
    </div>
  </div>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
      <img src="Data Buku.svg" alt="">
      <p>DATA BUKU</p>
    </div>
  </div>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
      <img src="Detail Buku.svg" alt="">
      <p>DETAIL BUKU</p>
    </div>
  </div>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
      <img src="PINJAM BUKU.svg" alt="">
      <p>PINJAM BUKU</p>
    </div>
  </div>
  <div class='carousel__item'>
    <div class='carousel__item-body'>
      <img src="Riwayat Transaksi.svg" alt="">
      <p>RIWAYAT TRANSAKSI</p>
    </div>
  </div>
  <!-- <div class='carousel__item'>
    img
    <div class='carousel__item-body'>
      <p class='title'>octopus</p>
      <p>Unicode: U+1F419</p>
    </div>
  </div>
  <div class='carousel__item'>
    img
    <div class='carousel__item-body'>
      <p class='title'>spiral shell</p>
      <p>Unicode: U+1F41A</p>
    </div>
  </div> -->
</div>
</div>

  <!-- penjelasan -->
  <div class="penjelasan">
      <h1><u id="garis"><span>Mengenai</span> Fitur Kami</u></h1>
      <div class="isi-penjelasan">
          <p class="text-justify">> Fitur Pemesanan Buku Secara Online: Anggota perpustakaan dapat melakukan pemesanan buku melalui aplikasi web ini. Mereka dapat 
              memilih buku yang ingin dipesan, memilih waktu pengambilan, dan melakukan konfirmasi secara online.
          </p>
          <p class="text-justify">> Fitur Daftar Katalog Buku: Anggota perpustakaan dapat melihat daftar katalog buku yang tersedia dalam sistem. Mereka dapat menelusuri 
              katalog buku dan mendapatkan informasi lengkap tentang isi buku, pengarang, serta stok buku yang tersedia.
          </p>
          <p class="text-justify">> Fitur Input, Edit, dan Hapus Data Buku, Pengarang, dan Penerbit: Sistem ini menyediakan fitur untuk mengelola data buku, pengarang, dan penerbit. 
              Pengguna dapat menginput, mengedit, dan menghapus data tersebut sesuai dengan kebutuhan perpustakaan.
          </p>
          <p class="text-justify">> Fitur Status Buku: Sistem ini memungkinkan pengguna untuk memeriksa status buku yang diusulkan. Mereka dapat melihat apakah buku sedang dipinjam, 
              rusak, atau tersedia untuk dipinjam.
          </p>
          <p class="text-justify">> Fitur Laporan Transaksi: Sistem ini menyediakan fitur laporan transaksi yang mencakup riwayat peminjaman, pengembalian, dan perpanjangan buku. 
              Anggota perpustakaan dan pustakawan dapat melihat dan mencetak laporan ini sebagai referensi.
          </p>
          <p class="text-justify">> Fitur Laporan Katalog Perpustakaan: Sistem ini juga menyediakan fitur laporan katalog perpustakaan. Pustakawan dapat menghasilkan laporan yang 
              mencakup informasi tentang buku yang tersedia, ketersediaan stok, dan kategori buku yang dimiliki perpustakaan.
          </p>
          <p class="text-justify">> Fitur Laporan Anggota per Periode: Sistem ini memungkinkan pengguna untuk menghasilkan laporan anggota perpustakaan dalam periode tertentu. 
              Laporan ini dapat mencakup jumlah anggota baru, jumlah anggota yang aktif, dan statistik lainnya terkait anggota perpustakaan.
          </p>
      </div>        
  </div>


  <footer class="f-bawah">
    <p>Copyright 2023 © National Library Of Indonesia</p>
</footer>
@endsection