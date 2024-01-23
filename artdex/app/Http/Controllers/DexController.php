<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class DexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('dex');
    }

    public function show(Pokemon $pokemon) {
        return view('pokemon', [
            'pokemon' => $pokemon
        ]);
    }
}
