<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class majalah extends Model
{
    use HasFactory;
    protected $table = 'majalahs';
    protected $primaryKey = 'ISSN';
    public $timestamps = false;
    protected $guarded = [];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
