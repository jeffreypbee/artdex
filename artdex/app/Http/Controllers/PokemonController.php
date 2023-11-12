<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function dex() {
        return view('dex.index', [
            'dex' => Pokemon::orderBy('number', 'ASC')->get()
        ]);
    }
}
