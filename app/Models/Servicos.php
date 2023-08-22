<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'veiculo_id',
        'data',
        'entrega',
        'solicitado',
        'realizado',
        'feitopor',
        'valor',
        'desconto',
        'obsfinais'
    ];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculos::class, 'veiculo_id');
    }
}
