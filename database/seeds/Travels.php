<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0 ; $i <100; $i++){
            $newTravel = new Travel();
            $newTravel->nome_pacchetto = $faker->text(20);
            $newTravel->costo = $faker->randomNumber(4, false);
            $newTravel->destinazione = $faker->word();
            $newTravel->save();
        }
    }
}
