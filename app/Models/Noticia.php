<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $primaryKey = 'id';    
    protected $fillable = [
        'id_jornalista',
        'id_tipo_noticia',
        'titulo',
        'descricao',
        'corpo_da_noticia',
        'link_imagem_destaque'
    ];

    protected $casts = [
        'date' => 'Timestamp'
    ];
    
    public $timestamp=false;
    //HABILITAR DPS
}