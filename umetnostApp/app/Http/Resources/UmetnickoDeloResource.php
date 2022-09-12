<?php

namespace App\Http\Resources;

use App\Models\Autor;
use App\Models\Vrsta;
use Illuminate\Http\Resources\Json\JsonResource;

class UmetnickoDeloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->resource->id,
            'naziv'=>$this->resource->naziv,
            'godina'=>$this->resource->godina,
            'cena'=>$this->resource->cena,
            'vrsta'=> (Vrsta::find($this->resource->vrsta_id)),
            'autor'=> (Autor::find($this->resource->autor_id)), 

        ];
    }
}
