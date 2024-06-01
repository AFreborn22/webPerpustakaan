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
    };

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

$('.password-toggle').click(function() {
    $(this).toggleClass('active');
    var input = $(this).prev('input');
    if (input.attr('type') === 'password') {
        input.attr('type', 'text');
    } else {
        input.attr('type', 'password');
    }
});