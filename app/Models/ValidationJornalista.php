<?php

namespace App\Models;

class ValidationJornalista{
    const RULE_JORNALISTA = 
    [
            'nome' => 'required | max:30',
            'sobrenome' => 'required | max:30',
            'email' => 'required | max:40',
            'senha' => 'required | max:20 | min: 8'
    ];
    
}