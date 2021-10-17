<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bayar_cicilan extends Model
{
    use HasFactory;
    protected $fillabel = [
        'kode_cicilan',
        'kode_kredit',
        'tgl_cicilan',
        'jml_cicilan',
        'cicilan_ke',
        'cicilan_sisa_ke',
        'cicilan_sisa_harga'
        ];
}
