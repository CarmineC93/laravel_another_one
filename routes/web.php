<?php

use App\Http\Controllers\Admin\PageController;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $pokemons = Pokemon::all();

    $allId = $pokemons->map(function ($pokemon) {
        return collect($pokemon->toArray())
            ->only(['id'])
            ->all();
    });

    $onlyOneId = $allId->random()['id'];
    // $randomId = $randomPokemon['id'];
    // dd($onlyOneId);
    return view('home', compact('pokemons', 'onlyOneId'));
});

Route::resource('/pokemons', PageController::class);


// Route::get('/pokemons', [PageController::class, 'index'])
//     ->name('pokemons.index');

// Route::get('/pokemons', [PageController::class, 'show'])
//     ->name('pokemons.index');
