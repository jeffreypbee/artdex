<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index() {
        return view('art.index', [
            'art' => Art::all()
        ]);
    }
}
