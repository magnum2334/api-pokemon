@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-contect-center">
            <div class="offset-4 col-4">
                <div class="card p-3">
                    <div class="card-header">
                        <h2 class="card-title text-center font">{{ isset($pokemonfined ['name']) ? 'pokemon :':'' }} {{ isset($pokemon ['name']) ? $pokemon ['name'] :'' }}</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center font" > {{  isset($pokemon ['id'] ) ? 'pokedex :' :''}} {{  isset($pokemon ['id'] ) ? $pokemon ['id'] :''}}</h3>
                        <h3 class="text-center mb-1">{{  isset($pokemon ['id']) ? 'types': ''  }}<br>  
                            @isset($pokemon['types']  )
                                @php
                                    foreach ($pokemon['types']  as $poke) {
                                        ($poke['slot'] == 1) ? $poketype = $poke['type'] ['name']: $poketype2 = $poke['type'] ['name'];
                                    }  
                                @endphp 
                            @endisset
                            <h4 class="text-center font"> {{isset($poketype) ? $poketype : ''}}  {{ isset($poketype2) ?  '|' :'' }}  {{ isset($poketype2) ?  $poketype2 :'' }}</h4>
                        </h3>
                        @isset($pokemon ['abilities'] )
                            <h3 class=" text-center font">abilities :</h3>
                            <div class="d-flex justify-content-center">
                                @foreach ($pokemon ['abilities']  as  $poke )
                                    <h5 class=" mx-1 text-center font"> {{ $poke['ability']['name'] }} </h5>
                                @endforeach  
                            </div>
                        @endisset
                        <div class="card-footer">
                            <img class="card-img-top font" src=" {{isset( $pokemon ['sprites']['front_default']) ? $pokemon ['sprites']['front_default'] :''}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection