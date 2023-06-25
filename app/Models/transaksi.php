<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['ID_Transaksi', 'ID_Buku'];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function penggunaDosen()
    {
        return $this->belongsTo(Pengguna_dosen::class);
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class);
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class);
    }



}
