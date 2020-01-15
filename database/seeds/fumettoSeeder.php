<?php

use App\fumetto;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class fumettoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      
        for ($i=0; $i < 10; $i++) { 

            $newFumetto = [

                'titolo' => $faker->words($nb = 5, $asText = true),
                'autore' => $faker-> name,
                'anno' => $faker ->year($max = 'now'),
                'recensione' => $faker -> text,
                'voto' => $faker -> numberBetween($min = 1, $max = 10)

            ];

            $fumetto = new fumetto;
            $fumetto -> fill($newFumetto);
            $fumetto -> save();

        }


    }
}
