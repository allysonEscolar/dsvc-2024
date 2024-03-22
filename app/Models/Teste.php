<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;

    protected $table = 'teste';
    protected $guarded = [
        'id'
    ];
    protected $fillabe = [
        'nome',
        'cpf',
        'idade,
    data_nascimento',
        'peso'
    ]
    ;
}