<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'petugas_id',
        'pasien_id',
        'harga',
    ];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }

    public function petugas()
    {
        return $this->belongsTo(petugas::class);
    }
}
