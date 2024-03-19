<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;

    protected $fillable = ['unidade_id', 'nome', 'cpf', 'email'];

    public function unidades()
    {
        return $this->belongsTo(Unidades::class);
    }

    public function cargos()
    {
        return $this->belongsToMany(Cargos::class, 'cargo_colaborador')
                    ->withPivot('nota_desempenho');
    }
}
