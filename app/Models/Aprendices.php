<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    use HasFactory;
    protected $fillable = ['Id_aprendiz','Id_categoria','iduser'];
    protected $primaryKey = 'Id_aprendiz';

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'Id_categoria');
    }
}
