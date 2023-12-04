<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencias extends Model
{
    use HasFactory;
    protected $fillable = ['Id_evidencia','iduser','Id_categoria','fechahora','descripcion'];
    protected $primaryKey = 'Id_evidencia';
}
