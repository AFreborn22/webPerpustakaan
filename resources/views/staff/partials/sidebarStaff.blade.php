<header class="header" id="header">
  <div class="header_toggle">
    <i class="bx bx-menu" id="header-toggle"></i>
  </div>
  <div style="border-left: 2px solid black; display: inline-block; margin-left: 30px;">
    <div class="userprofile">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle"
          viewBox="0 0 16 16" style="padding-left: 10px;">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg> <span id="Username" class="username">{{session('nama')}}</span>
      </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/editProfil/staff">Edit Profil</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="dropdown-item">
              <i class="bx bx-log-out nav_icon" style="color: red">
                  <span class="nav_name">Sign Out</span>
              </i>
          </button>
      </form>
  </li>
      </ul>
    </div>
  </div>
</header>
<div class="l-navbar" id="nav-bar">
  <nav class="nav">
    <div>
      <div class="nav_img"><img src="/ASSETS/logo.svg" alt="" /></div>

      <div class="nav_list">

        <a href="/staff/dashboardStaff" class="nav_link {{ ($judul === "Dashboard Staff") ? 'active' : ''}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door"
            viewBox="0 0 16 16">
            <path
              d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
          </svg>
          <span class="nav_name">Home</span>
        </a>

        <hr style="color: aliceblue" />

        <div id="buku">
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBuku"
            aria-expanded="false" aria-controls="collapseBuku">
            <div class="sb-nav-link-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                  d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
              </svg>
            </div>
            <span class="nav_name">Data Buku</span>

            <div class="sb-sidenav-collapse-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </div>
          </a>
          <div class="collapse" id="collapseBuku" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a href="/staff/dataBuku" class="nav_link {{ ($judul === "Data Buku" || $judul === "Tambah Buku" || $judul === "Edit Buku") ? 'active' : ''}}">Buku</a>
              <a href="/staff/dataMajalah" class="nav_link {{ ($judul === "Data Majalah" || $judul === "Tambah Majalah" || $judul === "Edit Majalah") ? 'active' : ''}}">Majalah</a>
              <a href="/staff/dataJurnal" class="nav_link {{ ($judul === "Data Jurnal" || $judul === "Tambah Jurnal" || $judul === "Edit Jurnal") ? 'active' : ''}}">Jurnal</a>
              <a href="/staff/dataSkripsi" class="nav_link {{ ($judul === "Data Skripsi" || $judul === "Tambah Skripsi" || $judul === "Edit Skripsi") ? 'active' : ''}}">Skripsi</a>
            </nav>
          </div>
        </div>

        <div id="anggota">
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAnggota"
            aria-expanded="false" aria-controls="collapseAnggota">
            <div class="sb-nav-link-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people"
                viewBox="0 0 16 16">
                <path
                  d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
              </svg>
            </div>
            <span class="nav_name">Data Anggota</span>

            <div class="sb-sidenav-collapse-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </div>
          </a>
          <div class="collapse" id="collapseAnggota" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a href="/staff/dataMahasiswa" class="nav_link {{ ($judul === "Data Mahasiswa" || $judul === "Tambah Mahasiswa" || $judul === "Edit Mahasiswa") ? 'active' : ''}}">Mahasiswa</a>
              <a href="/staff/dataDosen" class="nav_link {{ ($judul === "Data Dosen" || $judul === "Tambah Dosen" || $judul === "Edit Dosen") ? 'active' : ''}}">Dosen</a>
            </nav>
          </div>
        </div>

        <a href="/staff/dataTransaksi" class="nav_link {{ ($judul === "Data Transaksi") ? 'active' : ''}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet"
            viewBox="0 0 16 16">
            <path
              d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
          </svg>
          <span class="nav_name">Data Transaksi</span>
        </a>

        <div id="laporan">
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLaporan"
            aria-expanded="false" aria-controls="collapseLaporan">
            <div class="sb-nav-link-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
            </div>
            <span class="nav_name">Laporan</span>

            <div class="sb-sidenav-collapse-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </div>
          </a>
          <div class="collapse" id="collapseLaporan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a href="/staff/dataLaporanInventory" class="nav_link {{ ($judul === "Laporan Inventory") ? 'active' : ''}}">Inventory</a>
              <a href="/staff/dataLaporanAnggota" class="nav_link {{ ($judul === "Laporan Anggota") ? 'active' : ''}}">Anggota</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>