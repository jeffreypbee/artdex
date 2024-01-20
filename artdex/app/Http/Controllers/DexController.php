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
        return view('dex', [
            'pokedex' => Pokemon::orderBy('number', 'ASC')->get()
        ]);
    }
}