@extends('layout.mainEdit')

@section('anjing')
<div class="background-image"></div>
<h2>Edit Nama Dosen</h2>
<div class="profile-container2">

    <form action="{{route('dosen.updateDosen')}}" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="Nama" required>
        </div>

        <div class="form-group button-container">
            <button type="submit" class="save-button">Simpan</button>
        </div>

        </div>

       
    </form>
</div>
@endsection