<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoNoticia extends Model
{
    protected $table = 'tipo_noticia';
    protected $primaryKey = 'id';    
    protected $fillable = [
        'id_jornalista',
        'nome_tipo'
    ];

    protected $casts = [
        'date' => 'Timestamp'
    ];
    
    public $timestamp=false;
    //HABILITAR DPS
}