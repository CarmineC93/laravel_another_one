@extends('layouts.app')

@section('title', 'pokemon')

@section('content')

    <div class="container bg-dark">
        <div class="row m-4">
            <div class="col m-2">
                <img style="max-width: 80px;" class="d-flex align-items-center"
                    src="{{ Vite::asset('/resources/img/logo.png') }}" alt="pokedex">
            </div>

            <a class="btn btn-light text-success my-2" href="{{ route('pokemons.index') }}">
                Pokèdex
                <img style="max-width: 200px; min-height: 150px" src="{{ Vite::asset('/resources/img/pokedex.png') }}"
                    alt="pokedex">
            </a>


            <a class="btn btn-light text-success my-2" href="{{ route('pokemons.show', $onlyOneId) }}">
                Test a Random Pokèmon
                <img style="max-width: 200px; min-height: 150px" src="{{ Vite::asset('/resources/img/tallgrass.png') }}"
                    alt="pokedex">
            </a>


        </div>
    </div>

@endsection
