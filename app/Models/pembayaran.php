<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';

    protected $fillable = [
        'customer_id',
        'tanggal',
        'metode_bayar',
        'invoice_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
