<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
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

    public function veiculos(){
        return $this->hasMany(Veiculos::class, 'cliente_id');
    } 
    
    public function servicos(){
        return $this->hasMany(Servicos::class, 'cliente_id');
    }
}
