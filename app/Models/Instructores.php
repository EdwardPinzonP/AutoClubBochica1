<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Instructores extends Model
{
    use HasFactory;
    protected $fillable = ['Id_instructor','Id_categoria','iduser'];
    protected $primaryKey = 'Id_instructor';

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'Id_categoria');
    }
}
