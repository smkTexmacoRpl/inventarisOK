<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $fillable = ['kode','nama_lokasi','gambar_lokasi','keterangan'];
    public function barangs() 
    {
        return $this->hasMany('App\Models\Barang');
    }
}
