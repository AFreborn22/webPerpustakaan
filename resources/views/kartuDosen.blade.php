@extends('layout.maindosen')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/kartu.css">
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>KARTU ANGGOTA</b></h3>
        <div class="container">
            <div class="card-container">
                <div class="front">
                    <div class="image">
                        <img src="ASSETS/logo.svg" alt="" class="perpus" />
                        <img src="ASSETS/AMIKOM.png" alt="" class="amikom" />
                    </div>
                    <div class="card-number-box bold-text">{{ session('Username') }}</div>
                    <div class="flexbox">
                        <div class="box">
                            <span>NAMA ANGGOTA</span>
                            <div class="card-holder-name bold-text">{{ session('nama') }}</div>
                        </div>
                      
                    </div>
                </div>

                <div class="back">
                    <div class="stripe"></div>
                    <div class="box">
                        <span>NIK</span>
                        <div class="cvv-box bold-text">{{ session('nik') }}</div>
                        <img src="ASSETS/logo.svg" alt=" " class="backback" />
                    </div>
                </div>
            </div>

            <form id="credit-card-form" action=" ">
                <div class="inputBox">
                    <span>USERNAME</span>
                    <input type="text " maxlength="16 " class="username-input" id="username-input" value="{{ session('Username') }}" />
                </div>
                <div class="inputBox">
                    <span>NAMA ANGGOTA</span>
                    <input type="text " class="card-holder-input" value="{{ session('nama') }}"/>
                </div>
                <div class="flexbox">
                  
                    
                   
                   
                    <div class="inputBox">
                        <span>NIK</span>
                        <input type="text " maxlength="10 " class="cvv-input" value="{{ session('nik') }}" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="JS/kartu.js"></script>
    <script src="JS/back.js"></script>
@endsection
