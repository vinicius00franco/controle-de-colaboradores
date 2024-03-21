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
        $total = max(100, Colaboradores::count() + 1); // Garantindo que tenhamos pelo menos 100 registros
        $unidadesIds = Unidade::pluck('id')->toArray();
        for ($i = 1; $i <= $total; $i++) {
            Colaboradores::create([
                'nome' => $faker->name,
                'cpf' => $faker->unique()->numerify('############'),
                'email' => $faker->unique()->email,
                'unidade_id' => $faker->randomElement($unidadesIds)
            ]);
        }
    }
}
