<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table = 'socios';
    protected $fillable = ['id', 'nombre', 'email'];

    public function libros() {
        return $this->belongsToMany(Libro::class, 'PRESTAMOS', 'libro', 'socio_id')
        ->withTimestamps();
    }
}
