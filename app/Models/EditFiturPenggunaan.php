<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditFiturPenggunaan extends Model
{
    use HasFactory;

    protected $guarded = ['ID_fitur_penggunaan', 'NIK_Admin'];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
