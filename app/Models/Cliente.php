<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'endereco',
        'cidade',
        'estado'
    ];

    function carros(){
        return $this->hasMany(Veiculo::class);
    }
}
