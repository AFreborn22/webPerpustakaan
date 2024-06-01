@extends('admin.layouts.mainAdmin')

@section('konten')

<h2 class="home_page"><b>DASHBOARD ADMIN</b></h2>
<div class="row text-white d-flex justify-content-center align-items-center">
  <div class="col-xl-3 col-md-4 mt-4 mb-4">
    <div class="card">
      <div class="card-body rounded bg bg-primary">
        <h5 class="card-title"><b>BERANDA</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/carousel/menu">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 mt-4 mb-4">
    <div class="card">
      <div class="card-body rounded bg bg-warning">
        <h5 class="card-title"><b>SEKILAS</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h10zm-1 2H3v9h5a1 1 0 0 1 .707.293L10.414 13H13V3zm-3.793 5.5 1.647-1.647a.5.5 0 0 1 .146-.092.5.5 0 0 1 .555.832l-2 1.5a.5.5 0 0 1-.638 0l-2-1.5a.5.5 0 0 1 .555-.832.5.5 0 0 1 .146.092L7 9.086V8.5a.5.5 0 0 1 .207-.402Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/sekilas/edit">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 mt-4 mb-4">
    <div class="card">
      <div class="card-body rounded bg bg-success">
        <h5 class="card-title"><b>FITUR</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-puzzle" viewBox="0 0 16 16">
            <path d="M12 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0ZM6 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm5 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM4 11a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-9a2 2 0 1 0-4 0 2 2 0 0 0 4 0ZM2 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/berita/edit">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row text-white d-flex justify-content-center align-items-center">
  <div class="col-xl-3 col-md-4 mt-4 mb-4">
    <div class="card">
      <div class="card-body rounded bg bg-danger">
        <h5 class="card-title"><b>PANDUAN PEMINJAMAN</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/panduan/peminjaman">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 mt-4 mb-4">
    <div class="card">
      <div class="card-body rounded bg-info">
        <h5 class="card-title"><b>CARA PENGGUNAAN</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/admin/carapenggunaan">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 mt-4 mb-4">
    <div class="card">
      <div class="card-body rounded bg bg-secondary">
        <h5 class="card-title"><b>PANDUAN EDIT PROFIL</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
            <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/panduan/editprofil">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row text-white d-flex justify-content-center align-items-center">
  <div class="col-xl-3 col-md-4 mt-4 mb-5">
    <div class="card">
      <div class="card-body rounded bg" style="background: yellow">
        <h5 class="card-title"><b>DATA STAFF</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
            <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
            <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/admin/dataStaff">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 mt-4 mb-5">
    <div class="card">
      <div class="card-body rounded bg" style="background: cyan">
        <h5 class="card-title"><b>DATA MAHASISWA</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/admin/dataMahasiswa">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 mt-4 mb-5">
    <div class="card">
      <div class="card-body rounded bg" style="background: rgb(25, 245, 25)">
        <h5 class="card-title"><b>DATA DOSEN</b></h5>
        <div class="icon mt-2 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
          </svg>
        </div>
        <div class="card-footer mt-2 d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="/admin/dataDosen">Lihat Detail</a>
          <div class="small text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection