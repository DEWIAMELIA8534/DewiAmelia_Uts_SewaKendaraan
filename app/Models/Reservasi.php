<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_reservasi';
    protected $table = 'reservasi';
    protected $fillable = [
        'customer_id',
        'tanggal',
        'tanggal_mulai',
        'tanggal_akhir',
        'id_hotel',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function hargahariini(){
        return $this->belongsTo(Harga_sewa_mobil::class, 'id_hotel');
    }

    public function dataTambahanInvoice(){
        return $this->hasOne(Reservasi::class,'id_reservasi');
    }
}
