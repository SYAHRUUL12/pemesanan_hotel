<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = ['NIK', 'nama_customer', 'email', 'country',];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'customer_id');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'customer_id');
    }
}
