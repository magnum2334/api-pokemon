@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex w-100 align-items-center justify-content-around">
                        <h1 class="text-center"> name : {{ $pokemon['name'] }}</h1>
                    </div>
                    <h2 class="text-center"><strong>types</strong></h2>
                    <strong class="text-center"><p>{{ $pokemonName }} and {{ $pokemonName1 }}</p></strong>
                    <h2 class="text-center">abilities</h2> 
                    @foreach ($pokemon['abilities']  as  $poke )
                        <div class="text-center">   {{ $poke['ability']['name'] }}</div>
                    @endforeach
                    <h2 class="text-center"><strong>base experience </strong></h2>
                    <h2 class="text-center">{{ $pokemon['base_experience'] }}</h2>
                    <div class="card-footer">
                        <img class="card-img-top" src=" {{ $pokemon['sprites']['front_shiny']}}" alt="">
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
