<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class pembayaranResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    function rupiah($angka){

        $hasil_rupiah = "Rp " . number_format($angka);
        return $hasil_rupiah;

    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_pasien' => $this->pasien_id ,
            'nama_pasien' => $this->pasien->nama,
            'id_petugas' => $this->petugas_id ,
            'nama_petugas' => $this->petugas->nama,
            'harga' => $this->rupiah($this->harga),
            'Harga' => $this->harga,
        ];
    }
}
