<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesores extends Model
{
    use HasFactory;
    protected $fillable = ['Id_asesor','Id_categoria','iduser'];
    protected $primaryKey = 'Id_asesor';

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'Id_categoria');
    }
}
