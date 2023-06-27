@extends('layout.main')

@section('container')
<!-- kontak -->
<header class="judul-kontak">
    <h1>Kontak kami</h1>
</header>

<div class="isi-kontak1">
    <h2>Universitas amikom Yogyakarta</h2>
    <p>Kampus Terpadu : Jl. Ring Road Utara, Condong Catur, Sleman, Yogyakarta</p>
    <p>Telp: <span>(0274) 884201 – 207</span></p>
    <img src="ASSETS/download__3_-removebg-preview.png" alt="">
    <p>Fax : <span>(0274) 884208</span> Kodepos : <span>55283</span></p>
    <p>E-Mail : <span>amikom@amikom.ac.id humas@amikom.ac.id</span></p>
</div>

<div class="isi-kontak2">
    <h2>International Office</h2>
    <p>Telp: +62 274884 201 Ext. 612</p>
    <p>Fax: +62 274884 208</p>
    <p>E-Mail: io@amikom.ac.id</p>
</div>


<footer class="kont-bawah">
    <div class="isinya1">
            <img src="ASSETS/logo-amikom-t.png" alt="">
        <p>Diselenggarakan oleh
            <span>Yayasan Amikom Yogyakarta</span>
            Jl. Padjajaran, Ring Road Utara, Kel. Condongcatur, Kec. Depok, Kab. Sleman, 
            Prov. Daerah Istimewa Yogyakarta 55283</p>

            <p>Email : Yayasan@amikom.ac.id</p>
            <p>Email : <a href="amikom@amikom.ac.id">amikom@amikom.ac.id</a></p>
            <p>Telp  : (0274) 884201 – 207</p>
    </div>
    
    <div class="isinya2">
        <p id="decul">INTERNATIONAL OFFICE</p>
        <p>Email : io@amikom.ac.id</p>
        <p>Telp  : +62 274884 201 Ext. 612</p>
        <p>Fax   : +62 274884 208</p>

        <div class="locate">
            <a href="/Maps" target="_blank">
                <i data-feather="map-pin" id="icon"></i>
                LOKASI KAMI
            </a>
        </div>
        

        <a href="https://www.facebook.com/amikomjogja/">
            <i data-feather="facebook" id="icon"></i>
        </a>
        <a href="http://instagram.com/amikomjogja">
            <i data-feather="instagram" id="icon"></i>                
        </a>
        <a href="http://twitter.com/amikomjogja">
            <i data-feather="twitter" id="icon"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCNMwEZ8Y3JIod-d22o8yxZQ?view_as=subscriber">
            <i data-feather="youtube" id="icon"></i>
        </a>

    </div>
</footer>

<footer class="f-bawah" id="p-bantuan">
    <p>Copyright 2023 © National Library Of Indonesia</p>
</footer>
@endsection