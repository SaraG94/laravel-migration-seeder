<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $aziende = ['trenitalia', 'italo', 'trenord'];

        for ($i = 0; $i < 10; $i++) {
            $partenze = $faker->unixTime();

            $new_train = new Train();
            $new_train->azienda = $faker->randomElement($aziende);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $partenze;
            $new_train->orario_di_arrivo = $faker->unixTime(new $partenze('+1 hour'));
            $new_train->codice_treno = bothify('??-######');
            $new_train->numero_carrozze = numberBetween(2, 15);
                       
            $new_house->save();
        }
    }
}