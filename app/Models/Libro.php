<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    
    protected $table = 'libros';
    protected $fillable = ['id', 'titulo', 'autor', 'editorial', 'portada'];

    public function socios() {
        return $this->belongsToMany(Socio::class, 'PRESTAMOS', 'libro', 'socio_id')
        ->withTimestamps();
    }
}
