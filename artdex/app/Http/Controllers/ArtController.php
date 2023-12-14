<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index() {
        return view('admin.art.index', [
            'art' => Art::all()
        ]);
    }

    public function create() {
        return view('admin.art.create', [
            'pkmn' => Pokemon::orderBy('number', 'asc')->get()
        ]);
    }

    public function edit(Art $art) {
        return view('admin.art.edit', [
            'art' => $art,
            'pkmn' => Pokemon::orderBy('number', 'ASC')->get()
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'pokemon' => 'required',
            'date' => ''
        ]);

        $formFields['file'] = $request->file('file')->store('art', 'public');
        $pkmn = Pokemon::find($formFields['pokemon']);
        $pkmn->art()->create($formFields);

        return redirect('/admin')->with('message', 'Art created successfully');
    }

    public function update(Request $request, Art $art) {
        $formFields = $request->validate([
            'pokemon' => 'required',
            'date' => ''
        ]);

        $art->update($formFields);

        return redirect('/admin/art')->with('message', 'Art updated!');
    }

    public function destroy(Art $art) {
        $art->delete();

        return redirect('/admin/art')->with('message', 'Art deleted!');
    }
}
