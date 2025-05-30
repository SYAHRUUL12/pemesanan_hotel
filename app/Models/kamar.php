<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';
    protected $fillable = [
        'nama_kamar', 'jenis_kamar', 'ukuran_kamar', 'harga'
    ];

    public function hargaHariIni()
    {
        return $this->hasMany(Harga_hari_ini::class, 'id_kamar');
    }
}
