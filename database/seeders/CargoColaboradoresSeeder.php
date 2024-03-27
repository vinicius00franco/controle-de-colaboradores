<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{CargoColaboradores, Colaboradores, Cargo};
use Faker\Factory as Faker;

class CargoColaboradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Obtém todos os IDs de cargos e colaboradores
        $cargoIds = Cargo::pluck('id')->toArray();
        $colaboradorIds = Colaboradores::pluck('id')->toArray();

        // Itera sobre os colaboradores e associa um ou mais cargos a cada um
        foreach ($colaboradorIds as $colaboradorId) {
            // Escolhe um número aleatório de cargos a serem associados (de 1 a 3 neste exemplo)
            $numCargos = $faker->numberBetween(1, 3);

            // Embaralha aleatoriamente os IDs de cargos
            $randomCargoIds = $faker->randomElements($cargoIds, $numCargos);

            // Associa os cargos ao colaborador
            foreach ($randomCargoIds as $cargoId) {
                // Gere uma nota de desempenho aleatória (opcional)
                $notaDesempenho = $faker->numberBetween(1, 10);

                // Crie o registro na tabela CargoColaboradores
                CargoColaboradores::create([
                    'cargo_id' => $cargoId,
                    'colaboradores_id' => $colaboradorId,
                    'nota_desempenho' => $notaDesempenho,
                ]);
            }
        }
    }
}
