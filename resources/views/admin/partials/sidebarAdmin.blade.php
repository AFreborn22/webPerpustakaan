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
          </svg> <span id="username" class="username">{{session('nama')}}</span>
        </a>

        <ul class="dropdown-menu">
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <form action="{{route('admin.logout')}}" method="POST">
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

          <a href="/admin/dashboardAdmin" class="nav_link {{ ($title === "Dashboard Admin") ? 'active' : ''}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door"
              viewBox="0 0 16 16">
              <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
            </svg>
            <span class="nav_name">Home</span>
          </a>

          <hr style="color: aliceblue" />

          <a href="/admin/dataStaff" class="nav_link {{ ($title === "Data Staff" || $title === "Tambah Staff" || $title === "Edit Staff") ? 'active' : ''}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-person-workspace" viewBox="0 0 16 16">
              <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              <path
                d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
            </svg>
            <span class="nav_name">Data Staff</span>
          </a>

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
                <a href="/admin/dataMahasiswa" class="nav_link {{ ($title === "Data Mahasiswa" || $title === "Tambah Mahasiswa" || $title === "Edit Mahasiswa") ? 'active' : ''}}">Mahasiswa</a>
                <a href="/admin/dataDosen" class="nav_link {{ ($title === "Data Dosen" || $title === "Tambah Dosen" || $title === "Edit Dosen") ? 'active' : ''}}">Dosen</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>