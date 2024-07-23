<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mobil';
    protected $table = 'mobil';
    protected $fillable = [
        'nama_mobil',
        'jenis_mobil',
        'ukuran_mobil',
        'harga',
    ];

    public function dataTambahanHargaSewaMobil(){
        return $this->hasOne(Harga_sewa_mobil::class, 'id_mobil');
    }
}
