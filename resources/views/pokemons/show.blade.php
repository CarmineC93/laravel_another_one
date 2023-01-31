@extends('layouts.app')

@section('title', $pokemon->name)

@section('content')
    <section>
        <div class="container">
            <div class="d-flex justify-content-around pt-3">
                <h2>Name {{ $pokemon->name }}</h2>

                <button class="btn btn-danger">
                    <a style="color:white; text-decoration:none" href="{{ route('pokemons.index') }}">Torna a tutti i
                        Pokèmon</a>
                </button>
            </div>

            <dl>
                <dt>Name</dt>
                <dd>{{ $pokemon->name }}</dd>
                <dt>type1</dt>
                <dd>{{ $pokemon->type1 }}</dd>
                <dt>type2</dt>
                <dd>{{ $pokemon->type2 }}</dd>

                <h5>STATS</h5>

                <dt>total</dt>
                <dd>{{ $pokemon->total }}</dd>
                <dt>hp</dt>
                <dd>{{ $pokemon->hp }}</dd>
                <dt>attack</dt>
                <dd>{{ $pokemon->attack }}</dd>
                <dt>defence</dt>
                <dd>{{ $pokemon->defense }}</dd>
                <dt>sp_atk</dt>
                <dd>{{ $pokemon->sp_atk }}</dd>
                <dt>sp_def</dt>
                <dd>{{ $pokemon->sp_def }}</dd>
                <dt>speed</dt>
                <dd>{{ $pokemon->speed }}</dd>
                <dt>generation</dt>
                <dd>{{ $pokemon->generation }}</dd>
                <dt>legendary</dt>
                <dd>{{ $pokemon->legendary }}</dd>
            </dl>
        </div>
    </section>
@endsection
