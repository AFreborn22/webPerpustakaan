<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekilas extends Model
{
    use HasFactory;
    protected $guarded = ['ID_sekilas', 'NIK_Admin'];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
