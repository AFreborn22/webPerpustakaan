@extends('layout.main')

@section('container')
<div class="background-image"></div>

<!-- judul bantuan -->
<header class="judul-bantuan">
    <h1>Apa Yang Dapat Kami <span>Bantu ?</span></h1>
</header>

<!-- dropdown -->
<div class="bantuan-menu">
  @foreach ($bantuan as $bantuan)
    <div class="dropdown">
      <button class="dropdown-btn" onclick="toggleDropdown(this)">
        {{ $bantuan->judul }}
        <span class="dropdown-icon">+</span>
      </button>
      <div class="dropdown-content">
        <p>{{ $bantuan->isi }}</p>
      </div>
    </div>
  @endforeach
  
    <br>
    <br>
    <br>
</div>
@endsection