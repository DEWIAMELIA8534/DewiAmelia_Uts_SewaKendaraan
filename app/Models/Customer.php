<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'NIK',
        'nama_customer',
        'email',
        'country'
    ];

    public $timestamp = false;

    public function dataTambahanReservasiCustomer(){
        return $this->hasOne(Reservasi::class,'customer_id');
    }

    public function dataTambahanPembayaran(){
        return $this->hasOne(Pembayaran::class,'customer_id');
    }
}
