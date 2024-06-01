@extends('staff.layouts.mainStaff')

@section('konten')
    
<h2 class="home_page"><b>LAPORAN ANGGOTA</b></h2>
    <div class="mb-3">
      <form>
        <div class="form-row">
          <div class="rounded col-md-12 mb-3 d-flex align-items-center justify-content-between">
            <form action="/staff/dataLaporanAnggota" method="GET">
                <input type="search" class="form-control mx-2 border-2" id="inputCari" name="search" placeholder="Cari Laporan Inventory...">
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
                <th class="py-2">Nama</th>
                <th class="py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
            @endphp
            <tr class="text-center">
                @foreach($pengguna as $p)

                <tr class="text-center">
                    <td class="py-1">{{ $counter++ }}</td>
                    <td class="py-1">{{ $p->Nama }}</td>
                    <td class="py-1">Mahasiswa</td>
                </tr>
                @endforeach
                @foreach($pengguna_dosen as $pd)
                <tr class="text-center">
                    <td class="py-1">{{ $counter++ }}</td>
                    <td class="py-1">{{ $pd->nama_dosen }}</td>
                    <td class="py-1">Dosen</td>
                </tr>
                @endforeach
            </tr>
        </tbody>
    </table>

@endsection