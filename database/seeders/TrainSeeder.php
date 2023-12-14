<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->company();
            $new_train->partenza = $faker->city();
            $new_train->arrivo = $faker->city();
            $orarioPartenza = $faker->dateTimeBetween('-1 day');
            $new_train->orario_partenza = $orarioPartenza;
            $orarioArrivo = $faker->dateTimeBetween($orarioPartenza, 'now + 2 days');
            $new_train->orario_arrivo = $orarioArrivo;
            $new_train->codice_treno = $faker->unique()->randomNumber(5, true);
            $new_train->numero_carrozze = $faker->randomNumber(1, true);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();
        }
    }
}
