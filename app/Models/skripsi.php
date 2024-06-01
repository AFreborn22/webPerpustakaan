<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skripsi extends Model
{
    use HasFactory;

    protected $table = 'skripsis';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
