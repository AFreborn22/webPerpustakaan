@extends('staff.layouts.mainStaff')

@section('konten')

<h2 class="home_page"><b>JURNAL</b></h2>

    <a href="/staff/tambahJurnal">
        <button type="button" class="btn btn-warning text-white mt-2"><b>Tambah Jurnal</b></button>
    </a>

    <form>
        <div class="form-row">
          <div class="rounded col-md-12 mb-5 mt-4 d-flex align-items-center justify-content-between">
            <form action="/staff/dataJurnal" method="GET">
                <input type="search" class="form-control mx-2 border-2" id="inputCari" name="search" placeholder="Cari Jurnal...">
                <div class="input-group-append">
                    <button class="rounded text-white mx-2" type="submit" style="background: #3A0561">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </form>
          </div>
        </div>
      </form>

      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<div class="row" style="display: flex; flex-wrap: wrap; justify-content: flex-start;">
    @foreach ($dataJurnal as $dj)
      <div id="container3" style="flex: 0 0 calc(16.666% - 25px); margin-bottom: 25px;">
        <div class="data_buku">
          <div class="card" style="width: 13rem">
            <a href="">
                <img src="{{ asset('storage/'.$dj->cover) }}" alt="..." class="card-img-top" style="height: 15rem; object-fit: cover;"/>
            </a>
              <div class="card-body">
                <h5 class="card-title">{{ $dj->judul }}</h5>
                <p class="card-text" id="penulis">{{ $dj->penulis }}</p>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="/staff/{{ $dj->ISSN }}/editJurnal">
                        <button class="btn btn-primary btn-sm mx-2">Edit</button>
                    </a>
                    <form action="/staff/{{ $dj->ISSN }}/destroyJurnal" method="POST" onsubmit="return confirmDelete(event)">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    @endforeach
</div>
    
@endsection
