<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'pembeli';
    protected $fillabel = [
    'ktp_pembeli',
    'nama_pembeli',
    'alamat_pembeli',
    'telp_pembeli'
    ];
    public $timestamps = false;
    protected $guarded = [];
}
