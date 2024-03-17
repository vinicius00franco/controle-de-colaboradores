<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'email', 'unidade_id'];

    public function unidade()
    {
        return $this->belongsTo(Unidades::class);
    }

    public function cargos()
    {
        // recuperar na tabela a coluna de desempenho
        return $this->belongsToMany(Cargos::class, 'cargo_colaborador')->withPivot('nota_desempenho');
    }
}
