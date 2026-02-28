<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaki extends Model
{
    protected $fillable = [
        'no_ktp',
        'nama',
        'alamat',
        'tanggal_pendakian',
        'no_hp'
    ];

    protected $casts = [
        'tanggal_pendakian' => 'date',
    ];
}
