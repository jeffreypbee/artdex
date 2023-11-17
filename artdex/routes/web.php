<?php

use App\Models\Art;
use App\Models\Pokemon;
use App\Models\Generation;
use App\Models\PokemonType;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PokemonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'latest' => Art::latest(),
        'recent' => Art::recent()
    ]);
});

Route::get('/dex', function () {
    return view('dex.index', [
        'dex' => Pokemon::pokedex(),
        'art' => Art::posted()
    ]);
});

Route::get('/stats', function () {
    return view('dex.stats', [
        'dex' => Pokemon::pokedex(),
        'art' => Art::posted(),
        'types' => PokemonType::all(),
        'gens' => Generation::orderBy('id', 'ASC')->get()
    ]);
});

Route::get('/art', [ArtController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/pkmn/create', [PokemonController::class, 'create']);

Route::get('/admin/art', [ArtController::class, 'index']);

Route::get('/admin/pkmn', [PokemonController::class, 'index']);

Route::post('/admin/pkmn', [PokemonController::class, 'store']);

Route::get('/admin/art/create', [ArtController::class, 'create']);

Route::post('/admin/art', [ArtController::class, 'store']);
