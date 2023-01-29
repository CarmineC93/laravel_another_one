72 lines (63 sloc) 3.1 KB

@extends('layouts.app')

@section('content')
    <div class="container mt-4 bg-dark">
        <h3 class="text-center text-light">La lista dei pokemon</h3>
        <div class="text-end">

        </div>
        <div class="row justify-content-center">
            <div class="col-8">

                <table class="table text-light">
                    <thead>
                        <tr>
                            <th scope="col">Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">type1</th>
                            <th scope="col">type2</th>
                            <th scope="col">total</th>
                            <th scope="col">hp</th>
                            <th scope="col">attack</th>
                            <th scope="col">defence</th>
                            <th scope="col">sp_atk</th>
                            <th scope="col">sp_def</th>
                            <th scope="col">speed</th>
                            <th scope="col">gen</th>
                            <th scope="col">legendary</th>

                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pokemons as $pokemon)
                            <tr>
                                <th scope="row">{{ $pokemon->number }}</th>
                                <th scope="row">{{ $pokemon->name }}</th>
                                <th scope="row">{{ $pokemon->type1 }}</th>
                                <th scope="row">{{ $pokemon->type2 }}</th>
                                <th scope="row">{{ $pokemon->total }}</th>
                                <th scope="row">{{ $pokemon->hp }}</th>
                                <th scope="row">{{ $pokemon->attack }}</th>
                                <th scope="row">{{ $pokemon->defense }}</th>
                                <th scope="row">{{ $pokemon->sp_atk }}</th>
                                <th scope="row">{{ $pokemon->sp_def }}</th>
                                <th scope="row">{{ $pokemon->speed }}</th>
                                <th scope="row">{{ $pokemon->generation }}</th>
                                <th scope="row">{{ $pokemon->legendary }}</th>


                                {{-- <td>
                                    <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger delete-btn" type="submit"
                                            data-project-title="{{ $project->title }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button> 
                                </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
