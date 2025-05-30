<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';

    protected $fillable = [
        'deskripsi',
        'status',
        'besar_dp',
        'NIK',
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'NIK', 'NIK');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
