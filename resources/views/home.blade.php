@extends('layouts.app')

@section('title', 'pokemon')

@section('content')

    <h1>POKEMON</h1>

    <a class="btn btn-success text-light" href="{{ route('pokemons.index') }}">
        POKEDEX
    </a>

@endsection
