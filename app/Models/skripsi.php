<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skripsi extends Model
{
    use HasFactory;

    protected $guarded = ['id_skripsi'];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
