@extends('layout.kritik')

@section('style')
<link rel="stylesheet" href="CSS/kritik.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('konten')
    <div class="logoamikom">
        <img src="ASSETS/logo.svg" alt="Logo Amikom" class="logo" />
    </div>
    <h1 class="judul">KRITIK & MASUKAN</h1>

    <div class="container">
        <form id="myForm"
            action="https://script.google.com/macros/s/AKfycby8z0wd3A108xVpDJd-6o0Os48tm0Enwhyi1sg10Bws4sCpDxnKVuAVM5BdPnAIeM98Jw/exec"
            method="get">
            <div class="form-group">
                <input type="text" id="usernameInput" name="username" class="username-input" placeholder="Username" />
            </div>
            <div class="form-group">
                <input type="text" id="kritikInput" name="kritik" class="text-box"
                    placeholder="Yuk tulis kritikmu di sini!" />
            </div>
            <div class="form-group">
                <input type="text" id="saranInput" name="saran" class="text-box"
                    placeholder="Jangan lupa tulis saranmu juga di sini!" />
            </div>

            <br>
            <a href="/dashboardMHS">
                <button type="button" class="buttonBack">Kembali</button>
            </a>
            <button type="submit" value="submit" class="buttonLarge">Kirim</button>
        </form>
    </div>

    <script src="https://apis.google.com/js/api.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
