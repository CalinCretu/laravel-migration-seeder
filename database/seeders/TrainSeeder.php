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
            $new_train->orario_partenza = $faker->time();
            $new_train->orario_arrivo = $faker->time();
            $new_train->codice_treno = $faker->unique()->randomNumber(5, true);
            $new_train->numero_carrozze = $faker->randomNumber(1, true);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();
        }
    }
}
