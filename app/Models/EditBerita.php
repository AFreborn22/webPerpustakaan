<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditBerita extends Model
{
    use HasFactory;

    protected $guarded = ['ID_berita', 'NIK_Admin'];
    

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
