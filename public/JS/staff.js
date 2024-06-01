document.addEventListener("DOMContentLoaded", function (event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
                // show navbar
                nav.classList.toggle("show");
                // change icon
                toggle.classList.toggle("bx-x");
                // add padding to body
                bodypd.classList.toggle("body-pd");
                // add padding to header
                headerpd.classList.toggle("body-pd");
            });
        }

        // Ambil elemen dropdown
        const dropdown = document.getElementById('collapseBuku');
        // Ambil elemen tombol untuk membuka/menutup dropdown
        const dropdownToggle = document.querySelector('#buku .nav-link');

        // Tambahkan event listener untuk mengatur perilaku dropdown saat tombol diklik
        dropdownToggle.addEventListener('click', function (event) {
            event.preventDefault();
            dropdown.classList.toggle('show');
        });

        // Tambahkan event listener untuk menutup dropdown saat di luar elemen dropdown diklik
        window.addEventListener('click', function (event) {
            if (!dropdown.contains(event.target)) {
                dropdown.classList.remove('show');
            }
        });

        // Tambahkan event listener untuk menutup dropdown saat tombol Escape ditekan
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                dropdown.classList.remove('show');
            }
        });

        // Ambil elemen dropdown
        const dropdownAnggota = document.getElementById('collapseAnggota');
        // Ambil elemen tombol untuk membuka/menutup dropdown
        const dropdownToggleAnggota = document.querySelector('#anggota .nav-link');

        // Tambahkan event listener untuk mengatur perilaku dropdown saat tombol diklik
        dropdownToggleAnggota.addEventListener('click', function (event) {
            event.preventDefault();
            dropdownAnggota.classList.toggle('show');
        });

        // Tambahkan event listener untuk menutup dropdown saat di luar elemen dropdown diklik
        window.addEventListener('click', function (event) {
            if (!dropdownAnggota.contains(event.target)) {
                dropdownAnggota.classList.remove('show');
            }
        });

        // Tambahkan event listener untuk menutup dropdown saat tombol Escape ditekan
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                dropdownAnggota.classList.remove('show');
            }
        });

        // Ambil elemen dropdown
        const dropdownLaporan = document.getElementById('collapseLaporan');
        // Ambil elemen tombol untuk membuka/menutup dropdown
        const dropdownToggleLaporan = document.querySelector('#laporan .nav-link');

        // Tambahkan event listener untuk mengatur perilaku dropdown saat tombol diklik
        dropdownToggleAnggota.addEventListener('click', function (event) {
            event.preventDefault();
            dropdownLaporan.classList.toggle('show');
        });

        // Tambahkan event listener untuk menutup dropdown saat di luar elemen dropdown diklik
        window.addEventListener('click', function (event) {
            if (!dropdownLaporan.contains(event.target)) {
                dropdownLaporan.classList.remove('show');
            }
        });

        // Tambahkan event listener untuk menutup dropdown saat tombol Escape ditekan
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                dropdownLaporan.classList.remove('show');
            }
        });
    };

    showNavbar("header-toggle", "nav-bar", "body-pd", "header");

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll(".nav_link");

    function colorLink() {
        if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        }
    }

    linkColor.forEach((l) => l.addEventListener("click", colorLink));

    // Your code to run since DOM is loaded and ready
});

// untuk edit buku
function editBuku() {
    var judul = document.getElementById("Judul").value;
    var penulis = document.getElementById("Penulis").value;

    if (judul === "" || penulis === "") {
        alert("Mohon lengkapi semua field!");
        return false;
    } else {
        alert("Data berhasil disimpan!");
        return true;
    }
}

// untuk tambah admin
function tambahAdmin() {
    var nama = document.getElementById("Nama").value;
    var username = document.getElementById("Username").value;

    if (nama === "" || username === "") {
        alert("Mohon lengkapi semua field!");
        return false;
    } else {
        alert("Data berhasil disimpan!");
        return true;
    }
}

// Membaca file yang dipilih oleh pengguna
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Membuat elemen gambar baru
            var image = new Image();
            image.src = e.target.result;
            image.classList.add("preview-image"); // Menambahkan kelas CSS

            // Menambahkan gambar ke pratinjau
            var preview = document.getElementById("preview");
            preview.innerHTML = "";
            preview.appendChild(image);
        };

        reader.readAsDataURL(input.files[0]); // Membaca file sebagai URL data
    }
}

// Mendengarkan perubahan pada input file
var uploadFile = document.getElementById("uploadFile");
uploadFile.addEventListener("change", function () {
    readURL(this);
});

function confirmDelete(event) {
    event.preventDefault(); // Mencegah pengiriman permintaan penghapusan secara langsung

    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        event.target.submit(); // Kirim permintaan penghapusan setelah konfirmasi
    }
}