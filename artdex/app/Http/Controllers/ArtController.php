<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index() {
        return view('art.index', [
            'art' => Art::all()
        ]);
    }

    public function create() {
        return view('admin.art.create', [
            'pkmn' => Pokemon::orderBy('number', 'asc')->get()
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'pokemon' => 'required',
            'date' => 'required'
        ]);

        $formFields['file'] = $request->file('file')->store('art', 'public');
        $pkmn = Pokemon::find($formFields['pokemon']);
        $pkmn->art()->create($formFields);

        return redirect('/admin')->with('message', 'Art created successfully');
    }
}
