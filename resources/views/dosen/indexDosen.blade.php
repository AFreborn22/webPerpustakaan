@extends('layout.mainedit')

@section('anjing')
    <div class="container mt-5">
        <div class="container justify-content-center">
            <h1>Profil Pengguna Dosen</h1>
        </div>

        <form>
            {{-- @foreach ($pengguna as $pengguna) --}}
                
            <fieldset disabled>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">NIK</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{session('nik')}}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{session('nama')}}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Username</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                    placeholder="{{session('Username')}}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Password</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                    placeholder="{{session('Password')}}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{session('email')}}">
                </div>
            </fieldset>
            <div class="form-group button-container">
                <a href="/lupapass">
                    <button type="button" class="cancel-button">Ganti Password</button>
                </a>
                <a href="/editprofil/dosen/nama">
                    <button type="button" class="cancel-button">Ganti Nama</button>
                </a>
                <button type="submit" class="save-button"">Simpan</button>
            </div>
        </form>
        {{-- @endforeach --}}
    </div>
@endsection
