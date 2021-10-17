<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket_kredit extends Model
{
    use HasFactory;
    protected $fillabel = [
        'harga_paket',
        'kode_paket',
        'uang_muka',
        'pjc',
        'buna',
        'nilai_cicilan'
        ];
}
