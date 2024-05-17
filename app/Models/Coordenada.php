<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenada extends Model
{
    use HasFactory;

    protected $fillable = [
        'latitud',
        'longitud',
        'cortado',
        'nombre_beneficiario'
    ];

    public function cortarServicio()
    {
        $this->cortado = true;
        $this->save();
    }

}
