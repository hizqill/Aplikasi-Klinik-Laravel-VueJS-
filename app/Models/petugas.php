<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    public function pasien()
    {
        return $this->belongsTo(dokter::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class);
    }
}
