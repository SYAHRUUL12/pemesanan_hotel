<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga_hari_ini extends Model
{
    use HasFactory;
    protected $table = 'harga_hari_ini';
    protected $primaryKey = 'id_hotel';
    protected $fillable = [
        'harga', 'available_room', 'tanggal', 'id_kamar'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function reservasis()
    {
        return $this->hasMany(Reservasi::class, 'id_hotel');
    }
}
