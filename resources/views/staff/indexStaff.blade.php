@extends('layout.mainedit')

@section('anjing')
    <div class="container mt-5">
        <div class="container justify-content-center">
            <h1>Profil Pengguna Staff</h1>
        </div>

        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">NIK</label>
            <input type="text" id="disabledTextInput" class="form-control" value="{{ session('nik') }}" disabled>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nama</label>
            <input type="text" id="disabledTextInput" class="form-control" value="{{ session('nama') }}" disabled>
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Username</label>
            <input type="text" id="disabledTextInput" class="form-control" value="{{ session('Username') }}" disabled>
        </div>

        <a href="/staff/editprofil/{{ session('nik') }}/edit" class="btn btn-primary">Edit Profil</a>
    </div>
@endsection
