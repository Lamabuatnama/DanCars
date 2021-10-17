<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kredit extends Model
{
    use HasFactory;
    protected $fillabel = [
        'kode_kredit',
        'ktp_pembeli',
        'kode_paket',
        'kode_mobil',
        'tgl_kredit',
        'fotokopi_ktp',
        'fotkopi_kk',
        'fotokopi_slip_gaji'
        ];
}
