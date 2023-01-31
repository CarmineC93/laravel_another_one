@extends('layouts.app')

@section('title', 'pokemon')

@section('content')

    <div class="container bg-dark">
        <div class="m-4">
            <img class="d-block m-2" src="{{ Vite::asset('/resources/img/logo.png') }}" alt="pokedex">

            <a class="btn btn-light text-success my-2" href="{{ route('pokemons.index') }}">
                POKEDEX
                <img src="{{ Vite::asset('/resources/img/pokedex.png') }}" alt="pokedex">
            </a>

        </div>
    </div>

@endsection
