@extends('layout.mainEdit')

@section('anjing')
    <div class="background-image"></div>
    <h2>Edit Profil</h2>
    <div class="profile-container2">

        <form action="/mahasiswa/editprofil/{{ $pengguna->NIM }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" @error('Nama')
                    is-invalid
                @enderror id="Nama"
                    name="Nama" class="form-control" placeholder="Disabled input" required autofocus
                    value="{{ old('Name', $pengguna->Nama) }}">
            </div>

            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" @error('NIM')
                    is-invalid
                @enderror id="NIM"
                    name="NIM" class="form-control" placeholder="Disabled input" required
                    value="{{ old('NIM', $pengguna->NIM) }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" @error('email')
                    is-invalid
                @enderror
                    id="email" name="email" class="form-control" placeholder="Disabled input" required
                    value="{{ old('email', $pengguna->email) }}">
            </div>

            <div class="form-group">
                <label for="Username">Username:</label>
                <input type="text" @error('Username')
                    is-invalid
                @enderror
                    id="Username" name="Username" class="form-control" required
                    value="{{ old('Username', $pengguna->Username) }}">
                @error('Username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="Password">Password Lama:</label>
                <input type="password" @error('Password')
                    is-invalid
                @enderror
                    id="Password" name="Password" class="form-control" placeholder="Disabled input" required
                    value="{{ old('Password', $pengguna->username) }}">
            </div>

            <div class="form-group">
                <label for="Password">Password Baru:</label>
                <input type="password" @error('Password')
                    is_invalid
                @enderror id="Password" name="Password" required>
                @error('Password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>
@endsection
