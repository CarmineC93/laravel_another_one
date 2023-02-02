<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonsTableSeederCSV extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemonsData = Helpers::getCsvData(__DIR__ . '/pokemon.csv');

        foreach ($pokemonsData as $key => $pokemon) {
            if ($key == !0) {
                $newPoke = new Pokemon();
                $newPoke->number = $pokemon[0];
                $newPoke->name = $pokemon[1];
                $newPoke->type1 = $pokemon[2];
                $newPoke->type2 = $pokemon[3];
                $newPoke->total = $pokemon[4];
                $newPoke->hp = $pokemon[5];
                $newPoke->attack = $pokemon[6];
                $newPoke->defense = $pokemon[7];
                $newPoke->sp_atk = $pokemon[8];
                $newPoke->sp_def = $pokemon[9];
                $newPoke->speed = $pokemon[10];
                $newPoke->generation = $pokemon[11];
                $newPoke->legendary = $pokemon[12];
                $newPoke->image = $pokemon[13];
                $newPoke->save();
            }
        }
    }
}
