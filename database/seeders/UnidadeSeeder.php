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
        for ($i = 0; $i < 100; $i++) {
            Unidade::create([
                'nome_fantasia' => $faker->company,
                'razao_social' => $faker->company,
                'cnpj' => $faker->unique()->numerify('##############')
            ]);
        }
    }
}
