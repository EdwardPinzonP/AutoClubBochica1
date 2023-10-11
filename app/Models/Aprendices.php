<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    use HasFactory;
    protected $fillable = ['Id_aprendiz','Id_acudiente','Id_categoria','Id_curso','Nombres','Apellidos','Contacto','FechaNacimiento','Correo','TipoDocumento','NumeroDocumento','iduser'];
    protected $primaryKey = 'Id_aprendiz';
}
