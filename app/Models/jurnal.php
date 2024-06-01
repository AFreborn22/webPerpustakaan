<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnal extends Model
{
    use HasFactory;
    protected $table = 'jurnals';
    protected $primaryKey = 'ISSN';
    public $timestamps = false;
    protected $guarded = [];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
