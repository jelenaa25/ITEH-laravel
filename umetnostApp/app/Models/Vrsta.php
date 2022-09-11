<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vrsta extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv_vrste',
 
    ];

    public function dela()
    {
        return $this->hasMany(UmetnickoDelo::class);
    }
}
