<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Instructores extends Model
{
    use HasFactory;
    protected $fillable = ['Id_instructor','Nombres','Apellidos','Contacto','TipoDocumento','NumeroDocumento','FechaNacimiento','Correo','iduser'];
    protected $primaryKey = 'Id_instructor';
}
