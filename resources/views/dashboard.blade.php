@if(auth()->check())
    <!-- Tampilkan konten halaman dashboard untuk mahasiswa -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="Css/style.css" />
    </head>
    
    
    
        <!-- Konten dashboard di sini -->
        <body id="body-pd">
        
         
          <div class="background-image"></div>
          <header class="header" id="header">
              <div class="header_toggle">
                  <i class="bx bx-menu" id="header-toggle"></i>
              </div>
      
              <div style="
                border-left: 2px solid black;
                display: inline-block;
                margin-left: 30px;
              ">
                  <div class="userprofile">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="padding-left: 10px">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                    />
                  </svg>
                          <span id="username" class="username">User</span>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-item" href="EditProfil.html">Edit Profil</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Setting</a></li>
                          <li>
                              <hr class="dropdown-divider" />
                          </li>
                          <li>
                            <form action="/logout" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item"> <i class="bx bx-log-out nav_icon" style="color: red">
                              <span class="nav_name">Sign Out</span>
                            </i></button></form>
                            
                                 
                          </li>
                      </ul>
                  </div>
              </div>
          
          </header>
          
              <script src="Js/home.js"></script>
      </body>
    
    
    
    </html>
 

@else
    <!-- Pengguna belum diautentikasi, lakukan penanganan sesuai kebutuhan -->
    <p>Anda harus masuk terlebih dahulu untuk mengakses halaman ini.</p>
    
@endif
