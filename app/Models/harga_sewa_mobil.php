<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga_sewa_mobil extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mobil';
    protected $table = 'harga_sewa_mobil';
    protected $fillable = [
        'harga',
        'available_mobil',
        'tanggal',
        'id_mobil',
    ];

    public $timestamps = false;

    public function mobil(){
        return $this->belongsTo(mobil::class, 'id_mobil');
    }

    
}
