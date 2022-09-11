<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmetnickoDelo extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'godina',
        'autor_id',
        'vrsta_id',
        'cena'
    ];


    public function vrsta()
    {
        return $this->belongsTo(Vrsta::class);
    }

   public function autor()
   {
       return $this->belongsTo(Autor::class);
    }


}
