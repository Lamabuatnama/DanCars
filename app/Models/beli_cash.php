<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beli_cash extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'beli_cash';
    protected $fillabel = [
        'kode_cash',
        'ktp_pembeli',
        'kode_mobil',
        'tgl_pembeli',
        'cash_bayar'
        ];
    public function mobil(){
        return $this->hasOne(Mobil::class,'kode_mobil','kode_mobil');
    }

    public function pembeli(){
        return $this->hasOne(pembeli::class,'ktp_pembeli','ktp_pembeli');
    }
}
