<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    use HasFactory;

    protected $fillable = ['nome_fantasia', 'razao_social', 'cnpj'];

    public function colaboradores()
    {
        return $this->hasMany(Colaboradores::class);
    }
}
