<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

        protected $fillable = ['cargo'];
    public $timestamps = false; // Desativando os timestamps

    public function colaboradores()
    {
        return $this->belongsToMany(Colaboradores::class, 'cargo_colaboradores')
                    ->withPivot('nota_desempenho');
    }
}
