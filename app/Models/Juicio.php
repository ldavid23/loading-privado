<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'IDENTIFICADOR_FICHA',
        'DOCUMENTO_APRENDIZ',
        'NOMBRE' ,
        'APELLIDO' ,
        'ESTADO' ,
        'COMPETENCIA' ,
        'RESULTADO' ,
        'JUICIO'];
}
