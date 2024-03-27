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
        $total = max(10, Colaboradores::count() + 1); // Garantindo que tenhamos pelo menos 100 registros
        $unidadesIds = Unidade::pluck('id')->toArray();
        for ($i = 1; $i <= $total; $i++) {
            $created_at = $faker->dateTimeBetween('-1 year', 'now'); // Data de criação aleatória nos últimos 1 ano
            Colaboradores::create([
                'nome' => $faker->name,
                'cpf' => $faker->unique()->numerify('############'),
                'email' => $faker->unique()->email,
                'unidade_id' => $faker->randomElement($unidadesIds),
                'created_at' => $created_at,
                'updated_at' => $created_at 
            ]);
        }
    }
}
