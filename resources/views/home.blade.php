@extends('layouts.app')

@section('title', 'pokemon')

@section('content')

    <h1>POKEDEX</h1>

    <a class="btn btn-success text-light" href="{{ route('pokemons.index') }}">
        POKEMON
    </a>

@endsection
