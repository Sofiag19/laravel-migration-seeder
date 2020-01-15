<?php

namespace App\Http\Controllers;

use App\fumetto;
use Illuminate\Http\Request;

class fumettoController extends Controller
{
    public function index() {

        $fumetti = fumetto::all();
        //dd($fumetti);

        return view('pages.fumetti', compact('fumetti'));
    }
}
