@extends('staff.layouts.mainStaff')

@section('konten')
    
<h2 class="home_page"><b>LAPORAN INVENTORY</b></h2>
    <div class="mb-3">
      <form>
        <div class="form-row">
          <div class="rounded col-md-12 mb-3 d-flex align-items-center justify-content-between">
            <form action="/staff/dataLaporanInventory" method="GET">
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
                <th class="py-2">Judul</th>
                <th class="py-2">Jenis</th>
            </tr>
        </thead>

        <tbody>
            @php
                $counter = 1;
            @endphp
            <tr class="text-center">
                <tr class="text-center">
                    @foreach($buku as $b)
                    <tr class="text-center">
                        <td class="py-1">{{ $counter++ }}</td>
                        <td class="py-1">{{ $b->Judul }}</td>
                        <td class="py-1">Buku</td>
                    </tr>
                    @endforeach
                    @foreach($majalah as $m)
                    <tr class="text-center">
                        <td class="py-1">{{ $counter++ }}</td>
                        <td class="py-1">{{ $m->judul }}</td>
                        <td class="py-1">Majalah</td>
                    </tr>
                    @endforeach
                    @foreach($jurnal as $j)
                    <tr class="text-center">
                        <td class="py-1">{{ $counter++ }}</td>
                        <td class="py-1">{{ $j->judul }}</td>
                        <td class="py-1">Jurnal</td>
                    </tr>
                    @endforeach
                    @foreach($skripsi as $s)
                    <tr class="text-center">
                        <td class="py-1">{{ $counter++ }}</td>
                        <td class="py-1">{{ $s->judul }}</td>
                        <td class="py-1">Skripsi</td>
                    </tr>
                    @endforeach
                </tr>
            </tr>
        </tbody>

    </table>

@endsection