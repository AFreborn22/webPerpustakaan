<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $primaryKey = 'ISBN';
    public $timestamps = false;
    protected $guarded = [];

    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
