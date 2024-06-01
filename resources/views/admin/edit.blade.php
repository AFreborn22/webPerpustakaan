@extends('layout.mainEdit')

@section('anjing')
    <div class="background-image"></div>
    <h2>Edit Profil</h2>
    <div class="profile-container">

        <form action="">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password Lama:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password">Password Baru:</label>
                <input type="password" id="passwordbaru" name="passwordbaru" required>
            </div>

            <div class="form-group button-container">
                <a href="#">
                    <button type="button" class="cancel-button">Batal</button>
                </a>
                <button type="submit" class="save-button" onclick="showAlert()">Simpan</button>
            </div>
        </form>
    </div>
@endsection
