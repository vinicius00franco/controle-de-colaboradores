<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoColaboradores extends Model
{
    use HasFactory;

    protected $fillable = ['cargo_id', 'colaboradores_id', 'nota_desempenho'];
    public $timestamps = false; // Desativando os timestamps
}
