<?php

namespace Database\Seeders;

use App\Models\Unidade;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $created_at = $faker->dateTimeBetween('-1 year', 'now'); // Data de criação aleatória nos últimos 1 ano

            Unidade::create([
                'nome_fantasia' => $faker->company,
                'razao_social' => $faker->company,
                'cnpj' => $faker->unique()->numerify('##############'),
                'created_at' => $created_at,
                'updated_at' => $created_at
            ]);
        }
    }
}
