<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Generation;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function __invoke(Request $request) {
        return view('stats', [
            'types' => Type::orderBy('name', 'ASC')->get(),
            'generations' => Generation::orderBy('generation', 'ASC')->get()
        ]);
    }
}
