<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_datang',
        'keluhan',
        'dokter_id',
    ];


    public function dokter()
    {
        return $this->belongsTo(dokter::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class);
    }
}
