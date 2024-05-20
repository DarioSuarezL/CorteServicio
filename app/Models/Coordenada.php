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
        'nombre_beneficiario',
        'codigo_unidad_vecinal',
        'cantidad_facturas',
        'UMZ',
        'tipo_de_red',
        'codigo_factura',
        'importe_factura',
    ];

    public function cortarServicio()
    {
        $this->cortado = true;
        $this->save();
    }

}
