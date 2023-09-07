<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = 
['id',
'nombre',
'fecha de inicio',
'fecha de fin',
'asignado_a'];

    public function setAsignadoAAttribute($value)
    {
        // Combina el nombre del asignado con un timestamp
        $this->attributes['asignado_a'] = $value . '_' . now()->timestamp;
    }
}
