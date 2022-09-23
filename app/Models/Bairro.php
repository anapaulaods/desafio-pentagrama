<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_bairro',
        'cidade_id',
    ];

    public function cidades() {
        return $this->belongsTo(Cidade::class);
    }
}
