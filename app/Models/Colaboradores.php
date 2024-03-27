<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Colaboradores extends Model
{
    use HasFactory;

    protected $fillable = ['id','unidade_id', 'nome', 'cpf', 'email'];
    public $timestamps = false; // Desativando os timestamps

    public function unidades()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id');
    }

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, 'cargo_colaboradores')
                    ->withPivot('nota_desempenho');
    }

    // validações



    // servicos

    public function atribuirCargo($cargoId)
    {
        $this->cargos()->attach($cargoId);
    }
}
