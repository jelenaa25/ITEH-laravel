<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'drzava',
        'grad',
        'kontakt'
    ];
    public function dela()
    {
        return $this->hasMany(UmetnickoDelo::class);
   }
}
