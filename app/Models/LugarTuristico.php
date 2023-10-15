<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarTuristico extends Model
{
    use HasFactory;

    protected $table = 'lugares_turisticos';

    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'region_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function ofertasTurisicas()
    {
        return $this->hasMany(OfertaTuristica::class, 'lugar_turistico_id');
    }

}
