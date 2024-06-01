@extends('staff.layouts.mainStaff')

@section('konten')
    
<h2 class="home_page"><b>DATA DOSEN</b></h2>
<a href="/staff/tambahDosen">
    <button class="btn btn-warning text-white mt-2 mb-4"><b>Tambah Dosen</b></button>
</a>
    <div class="mb-3">
      <!-- Form untuk fitur pencarian -->
      <form>
        <div class="form-row">
          <div class="rounded col-md-12 mb-3 d-flex align-items-center justify-content-between">
            <form action="/staff/dataDosen" method="GET">
                <input type="search" class="form-control mx-2 border-2" id="inputCari" name="search" placeholder="Cari Dosen...">
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
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered text-white rounded-table mt-5" style="background: #3A0561">
        <thead>
            <tr class="text-center">
                <th class="py-2">No</th>
                <th class="py-2">NIK</th>
                <th class="py-2" style="width: 50%;">Nama Dosen</th>
                <th class="py-2">Email</th>
                <th class="py-2" style="width: 15%;">Aksi</th>
            </tr>
        </thead>
        @foreach ($dataDosen as $dd)
        <tbody>
            <tr class="text-center">
                <td class="py-1">{{ $loop->iteration }}</td>
                <td class="py-1">{{ $dd->NIK_dosen }}</td>
                <td class="py-1">{{ $dd->nama_dosen }}</td>
                <td class="py-1">{{ $dd->email }}</td>
                <td class="py-1 justify-content-between">
                    <div class="d-flex justify-content-between">
                        <a href="/staff/{{ $dd->NIK_dosen }}/editDosen">
                            <button class="btn btn-primary btn-sm mx-4">Edit</button>
                        </a>
                        <form action="/staff/{{ $dd->NIK_dosen }}/destroyDosen" method="POST" onsubmit="return confirmDelete(event)">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mx-4">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

@endsection