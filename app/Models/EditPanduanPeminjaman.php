<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditPanduanPeminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['ID_panduan_peminjamanbuku', 'NIK_Admin'];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
