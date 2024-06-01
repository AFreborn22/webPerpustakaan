<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(pengguna::class, 'Nama', 'NIM');
    }

    public function dosen()
    {
        return $this->belongsTo(pengguna_dosen::class, 'nama_dosen', 'NIK_dosen');
    }

    public function buku()
    {
        return $this->belongsTo(buku::class, 'Judul', 'ISBN');
    }

    public function majalah()
    {
        return $this->belongsTo(majalah::class, 'judul', 'ISSN');
    }
    public function jurnal()
    {
        return $this->belongsTo(jurnal::class, 'judul', 'ISSN');
    }

    public function skripsi()
    {
        return $this->belongsTo(skripsi::class, 'judul', 'id');
    }
}