<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $fillable = [
        'customer_id', 'tanggal', 'tanggal_mulai', 'tanggal_akhir', 'id_hotel'
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }

    public function hargaHariIni()
    {
        return $this->belongsTo(Harga_hari_ini::class, 'id_hotel');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'id_reservasi');
    }
}
