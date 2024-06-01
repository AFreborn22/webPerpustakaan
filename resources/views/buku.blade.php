@extends('layout.mainuser')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/CSS/stylebagas.css">
@endsection

@section('konten')
    <div class="height-100">
        <h3 class="home_page"><b>KATALOG BUKU</b></h3>

        <div class="search-bar">
            <input type="text" placeholder="Cari buku..." id="search-input" />
            <button type="submit" onclick="searchBooks()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>

        <div class="katalog_buku">
            @foreach ($bukus as $buku)
                <div class="card" >
                    <a href="{{ route('buku.show', ['ISBN' => $buku->ISBN]) }}">
                        <img src="{{ asset('storage/' . $buku->cover) }}" class="card-img-top " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">{{ $buku->Judul }}</h5>
                            <p class="card-text" id="pengarang">{{ $buku->Pengarang }}</p>
                            <p class="card-text-status" style="color: rgb(5, 178, 37)">
                                Stok : {{ $buku->Jumlah_Stok }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        @if ($pesan)
            <h4>{{ $pesan }}</h4>
        @endif

    </div>

   
    <script src="JS/back.js"></script>
    <script>
        function searchBooks() {
            var query = document.getElementById('search-input').value;
            window.location.href = '/buku?query=' + query;
        }

        var input = document.getElementById("search-input");
        input.addEventListener("keypress", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                searchBooks();
            }
        });
    </script>
@endsection
