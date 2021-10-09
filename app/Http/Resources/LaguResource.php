<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LaguResource extends JsonResource
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
     'judul_lagu' => $this->judul_lagu,
     'penyanyi' => $this->penyanyi,
     'img_thumb' => $this->img_thumb,
     'jumlah_dimainkan' => $this->jumlah_dimainkan,
     'created_at' => $this->created_at,
     'updated_at' => $this->updated_at,
        ];
    }
}
