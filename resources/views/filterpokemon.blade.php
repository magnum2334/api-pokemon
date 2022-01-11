@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-3">
            @include('filterType', ['method' => 'POST', 'url' => route('filterPokemon')])    
        </div>
        <div class="col-12 my-3">
            <div class="card">
                <div class="card-header bg-secondary">
                    <span class="fs-3">type : {{ $type }}</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>
                                    name
                                </th>
                                <th>
                                    slot
                                </th>
                                <th>
                                    url
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pokemon as $poke)
                                <tr>
                                    <td>{{ $poke->pokemon->name }}</td>
                                    <td>{{ $poke->slot }}</td>
                                    <td><a href="{{ route('show_pokemon', $poke->pokemon->name ) }}">ver</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                     {{-- Pagination --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection