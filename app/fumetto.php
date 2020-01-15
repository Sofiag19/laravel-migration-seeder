<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fumetto extends Model
{
    //opzionale se il nome della tabella è il plurale corretto del nome della classe che estende Model
    protected $table = 'fumetti';
    
    protected $fillable = [

        'titolo',
        'autore',
        'anno',
        'recensione',
        'voto'

    ];
}
