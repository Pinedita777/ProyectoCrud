<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'nombre', 'tfno', 'direccion'];

    public function ejemplares()
    {
        return $this->belongsToMany(Ejemplar::class, 'usuario_ejemplar');
    }
}
