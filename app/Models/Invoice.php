<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_invoice';
    protected $table = 'invoice';
    protected $fillable = [
        'deskripsi',
        'status',
        'besar_dp',
        'id_reservasi',
    ];

    public function reservasi(){
        return $this->belongsTo(Reservasi::class, 'id_reservasi');
    }

    public function dataTambahanPembayaranCustomer(){
        return $this->hasOne(Pembayaran::class,'id_invoice');
    }
}
