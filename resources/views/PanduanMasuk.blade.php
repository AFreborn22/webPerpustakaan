@extends('layout.main')

@section('container')
    <!-- judul panduan masuk -->
    <div class="judulsekilas">
        <h1 class="judulnya">
            Yuk Simak <span>Panduan Masuknya</span> Supaya Gak Salah !
        </h1>
    </div>

    <!-- panduan masuk -->
    <div class="isi-panduan">
        <div class="no-1">
            <img src="ASSETS/man.svg" alt="rapi">
            <img src="ASSETS/letter-v 1.svg" alt="salam">
            <img src="ASSETS/social-media.svg" alt="presensi">
            <img src="ASSETS/suitcase.svg" alt="tas">
            <img src="ASSETS/emoji.svg" alt="senyum">
        </div>

        <div class="no-2">
            <div class="kesatu">
                <h3>Berpakaian Rapi</h3>
                <p>Tampil rapi dan berkelas, jadikan penampilanmu cerminan kecerdasanmu. 
                    Di Perpustakaan Amikom, berpakaianlah dengan penuh percaya diri dan 
                    let's explore the world of knowledge together!
                    Jangan lupa jika ingin masuk perpustakaan wajib berpakaian rapi
                    mengenakan kemeja, celana dan sepatu.
            </div>

            <div class="kedua">
                <h3>Salam</h3>
                <p>Salam hangat untuk para pecinta literasi! Di Perpustakaan Amikom Online, 
                    kami siap menyambutmu dengan senyuman dan layanan yang ramah. Ayo, 
                    datanglah dengan semangat dan bergabunglah dalam komunitas pembelajar yang inspiratif !
                    Jangan lupa salam & sapa !
                </p>
            </div>

            <div class="ketiga">
                <h3>Wajib Presensi</h3>
                <p>Presensi menjadi cermin kesungguhanmu dalam mengejar ilmu. Di Perpustakaan Amikom Online, 
                    kehadiranmu sangat berarti. Mari bergandengan tangan membangun komunitas pembelajar yang inspiratif 
                    dan bersemangat!</p>
            </div>

            <div class="keempat">
                <h3>Barang Bawaan</h3>
                <p>Keikutsertaanmu amat berarti! Untuk menjaga keamanan dan kenyamanan bersama, tas wajib dititipkan di area yang tersedia. 
                    Dengan begitu, kita bisa fokus mengeksplorasi dunia pengetahuan tanpa beban !
                    Demi kenyamanan dan ketertiban jangan lupa di titip ya jika membawa barang bawaan !
                </p>
            </div>

            <div class="kelima">
                <h3>Senyum</h3>
                <p>Senyummu adalah kunci kebahagiaan di Perpustakaan Amikom Online! Jadikan senyumanmu sebagai sapaan hangat kepada sesama pembaca. 
                    Bersama-sama, mari ciptakan atmosfer yang positif dan menyenangkan dalam perjalanan literasi kita!
                    Jangan Lupa senyum and Enjoy it !
                </p>
            </div>
        </div>
    </div>
@endsection()