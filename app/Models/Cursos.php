<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $fillable = ['Id_curso','Id_categoria','Duracion','NombreCurso'];
    protected $primaryKey = 'Id_curso';
}
