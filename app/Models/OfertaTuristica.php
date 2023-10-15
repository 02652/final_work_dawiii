<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertaTuristica extends Model
{
    use HasFactory;
    protected $table = 'ofertas_turisticas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'cartera_posibilidades',
        'precio',
        'imagen_principal',
        'imagenes',
        'lugar_turistico_id'
    ];

    public function lugarTuristico()
    {
        return $this->belongsTo(LugarTuristico::class, 'lugar_turistico_id');
    }
}
