<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'carritos';

    protected $fillable = [
        'oferta_turistica_id',
        'user_id',
    ];

    public function ofertaTuristica()
    {
        return $this->belongsTo(OfertaTuristica::class, 'oferta_turistica_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
