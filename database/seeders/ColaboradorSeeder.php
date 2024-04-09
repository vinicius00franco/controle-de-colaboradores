<?php

namespace Database\Seeders;

use App\Models\{Colaboradores , Unidade};
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $totalColaboradores = 0; 

        foreach (Unidade::all() as $unidade) {
            if ($totalColaboradores >= 500) {
                break; // Sai do loop se já atingimos ou ultrapassamos 500 colaboradores
            }

            // Defina um número aleatório de colaboradores entre 1 e 50 ou o máximo restante até 500
            $numColaboradores = min(rand(1, 50), 500 - $totalColaboradores);
            
            // Crie colaboradores para a unidade atual
            for ($i = 0; $i < $numColaboradores; $i++) {
                try {
                    Colaboradores::create([
                        'nome' => $faker->name,
                        'cpf' => $faker->unique()->numerify('###########'),
                        'email' => $faker->unique()->safeEmail,
                        'unidade_id' => $unidade->id,
                    ]);
                    $totalColaboradores++;
                } catch (\Illuminate\Database\QueryException $e) {
                    // Lidar com exceção de violação de restrição de chave única
                    if ($e->getCode() == '23000') {
                        continue; 
                    } else {
                        throw $e; 
                    }
                }
            }
        }
    }
    
    
}
