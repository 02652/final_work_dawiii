<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen'
    ];

    public function lugaresTuristicos() {
        return $this->hasMany(LugarTuristico::class, 'region_id');
    }
}
