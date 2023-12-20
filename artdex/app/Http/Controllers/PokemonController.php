<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\PokemonType;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index() {
        return view('admin.pkmn.index', [
            'pokemon' => Pokemon::orderBy('number', 'ASC')->get()
        ]);
    }

    public function show(Pokemon $pokemon) {
        return view('dex.show', [
            'pkmn' => $pokemon
        ]);
    }

    public function create() {
        return view('admin.pkmn.create', [
            'types' => PokemonType::orderBy('name')->get()
        ]);
    }

    public function edit(Pokemon $pokemon) {
        return view('admin.pkmn.edit', [
            'pokemon' => $pokemon,
            'types' => PokemonType::orderBy('name')->get()
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'number' => 'required',
            'name' => 'required',
            'form' => '',
            'type1' => 'required',
            'type2' => ''
        ]);

        $pkmn = Pokemon::create($formFields);
        $pkmn->types()->attach($formFields['type1']);
        if ($formFields['type2'] !== null) {
            $pkmn->types()->attach($formFields['type2']);
        }

        return redirect('/admin')->with('message', 'Pokemon successfully added');
    }

    public function update(Request $request, Pokemon $pokemon) {
        $formFields = $request->validate([
            'number' => 'required',
            'name' => 'required',
            'form' => '',
            'type1' => 'required',
            'type2' => ''
        ]);

        $pokemon->update($formFields);
        $pokemon->types()->detach();
        $pokemon->types()->attach($formFields['type1']);
        if ($formFields['type2'] !== null) {
            $pokemon->types()->attach($formFields['type2']);
        }

        return redirect('/admin/pkmn')->with('message', 'Pokemon updated!');
    }
}
