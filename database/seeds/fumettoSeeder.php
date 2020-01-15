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

            //va a creare un oggetto della classe nel model
            $fumetto = new fumetto;

            //valorizza i campi con il fillable
            $fumetto -> fill($newFumetto);
            
            //prende l'oggetto con i fillable e salvalo nel db
            $fumetto -> save();

        }


    }
}
