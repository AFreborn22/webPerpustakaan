@extends('layout.mainedit')

@section('anjing')
    <div class="container mt-5">
        <div class="container justify-content-center">
            <h1>Profil Pengguna</h1>
        </div>

        <form>
            {{-- @foreach ($pengguna as $pengguna) --}}
                
            <fieldset disabled>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">NIM</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{session('nim')}}">
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
                    placeholder="#">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{session('email')}}">
                </div>
            </fieldset>
            <a href="mahasiswa/editprofil/edit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </a>
        </form>
        {{-- @endforeach --}}
    </div>
@endsection
