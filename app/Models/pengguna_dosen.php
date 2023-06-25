<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna_dosen extends Model
{
    use HasFactory;

    protected $guarded = ['Hak_Akses'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
