<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = ['Hak_Akses'];

    public function EditBerita()
    {
        return $this->hasMany(EditBerita::class);
    }

    public function EditCarousel()
    {
        return $this->hasMany(EditCarousel::class);
    }

    public function EditFiturPenggunaan()
    {
        return $this->hasMany(EditFiturPenggunaan::class);
    }

    public function EditPanduanEprofil()
    {
        return $this->hasMany(EditPanduanEprofil::class);
    }

    public function EditPanduanPeminjaman()
    {
        return $this->hasMany(EditPanduanPeminjaman::class);
    }

    public function EditPanduanRegistrasi()
    {
        return $this->hasMany(EditPanduanRegistrasi::class);
    }

    public function EditPanduanSettings()
    {
        return $this->hasMany(EditPanduanSettings::class);
    }

    public function EditTataMasuk()
    {
        return $this->hasMany(EditTataMasuk::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

}
