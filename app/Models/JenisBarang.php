<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    use HasFactory;
    protected $table ='jenis';
    protected $fillable =['jenis_barang'];

    public function barangs() 
    {
        return $this->hasMany('App\Models\Barang');
    }
}
