<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class pasienResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'keluhan' => $this->keluhan,
            'tanggal_datang' => $this->tanggal_datang,
            'dokter_id' => $this->dokter_id,
            'dokter_nama' => $this->dokter->nama,
        ];
    }
}
