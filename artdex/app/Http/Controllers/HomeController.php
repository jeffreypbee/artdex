<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home', [
            'latestArt' => Art::published()->latest()->take(9)->get()
        ]);
    }
}
