<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\{Cargo };

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = ['Analista', 'Programador', 'Gerente', 'Assistente', 'Designer', 'Engenheiro', 'Técnico', 'Supervisor', 'Coordenador', 'Diretor'];
        $total = max(10, Cargo::count() + 1); // Garantindo que tenhamos pelo menos 10 registros
        for ($i = 1; $i <= $total; $i++) {
            Cargo::create(['cargo' => $cargos[$i - 1]]);
        }
    }
}
