@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('search', ['method' => 'POST', 'url' => route('search')])    
        </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex w-100 align-items-center justify-content-around">
                            <h1 class="text-center" style="font-family: cursive;">{{ isset($pokemonfined ['name']) ? 'pokemon :':'' }} {{ isset($pokemonfined ['name']) ? $pokemonfined ['name'] :'' }}</h1>
                        </div>
                        @isset($pokemonfined ['abilities'] )
                            <h2 class=" text-center" style="font-family: cursive;">abilities :</h2>
                            @foreach ($pokemonfined ['abilities']  as  $poke )
                                <h3 class="text-center" style="font-family: cursive;"> {{ $poke['ability']['name'] }}</h3>
                            @endforeach
                        @endisset
                        <h2 class="text-center" style="font-family: cursive;"> {{  isset($pokemonfined ['id'] ) ? 'pokedex :' :''}} {{  isset($pokemonfined ['id'] ) ? $pokemonfined ['id'] :''}}</h2>
                        <div class="card-footer">
                            <img class="card-img-top"  style="font-family: cursive;" src=" {{isset( $pokemonfined ['sprites']['front_default']) ? $pokemonfined ['sprites']['front_default'] :''}}" alt="">
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
