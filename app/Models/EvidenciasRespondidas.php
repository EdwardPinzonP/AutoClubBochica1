<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvidenciasRespondidas extends Model
{
    use HasFactory;
    protected $fillable = ['Id_evidenciaR','Id_categoria', 'iduser','Id_evidencia','adjunto','nota'];
    protected $primaryKey = 'Id_evidenciaR';

    public function evidencia()
    {
        return $this->belongsTo(Evidencias::class, 'Id_evidencia', 'Id_evidencia');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
}

