<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo(pengguna::class, 'NIM', 'NIM');
    }

    public function dosen()
    {
        return $this->belongsTo(pengguna_dosen::class, 'NIK_dosen', 'NIK_dosen');
    }
    
    public function pengguna()
    {
        return $this->belongsTo(pengguna::class);
    }

    public function penggunaDosen()
    {
        return $this->belongsTo(pengguna_dosen::class);
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class);
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class);
    }
    public function user()
{
    return $this->belongsTo(User::class, 'NIM', 'NIM');
    return $this->belongsTo(User::class, 'NIK_dosen', 'NIK_dosen');
}


}
