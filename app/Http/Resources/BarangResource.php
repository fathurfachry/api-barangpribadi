<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BarangResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'jenis_barang' => $this->category('jenis_barang'),
        'nama_barang' => $this->nama_barang,
        'deskripsi_barang' => $this->deskripsi_barang,
        'pemilik' => $this->pemilik,
        
        ];
    }
}
