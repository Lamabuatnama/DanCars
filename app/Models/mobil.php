<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primaryKey   = 'kode_mobil';
    public $incrementing    = false;
    protected $fillabel = [
    'kode_mobil',
    'merk',
    'type',
    'warna',
    'harga_mobil',
    'gambar'
    ];
    public $timestamps = false;
    protected $guarded = [];

}
