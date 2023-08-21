<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'tipo',
        'modelo',
        'placa'
    ];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
    
}
