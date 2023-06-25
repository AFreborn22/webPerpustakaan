<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditPanduanRegistrasi extends Model
{
    use HasFactory;

    protected $guarded = ['ID_panduan_registrasi', 'NIK_Admin'];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
