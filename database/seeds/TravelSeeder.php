<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_travel = new Travel();
            $new_travel->destinazione = $faker->city();
            $new_travel->prezzo = $faker->randomDigit();
            $new_travel->data_partenza = $faker->date();
            $new_travel->data_ritorno = $faker->date();
            $new_travel->timestamps = false;
            $new_travel->save();
        }
    }
}
