@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="mx-1 font"  >{{ isset($pokedex ['id']) ? '': 'there are no pokemon, press next' }}</h1>
                    <h2 class=" card-title text-center font">{{ isset($pokedex ['name']) ? 'pokemon :':'' }} {{ isset($pokedex ['name']) ? $pokedex ['name'] :'' }}</h2>
                </div>
                <div class="card-body">
                    <h3 class="text-center font" > {{  isset($pokedex ['id'] ) ? 'pokedex :' :''}} {{  isset($pokedex ['id'] ) ? $pokedex ['id'] :''}}</h3>
                    <h3 class="text-center mb-1">{{  isset($pokedex ['id']) ? 'types': ''  }}<br>  
                        @isset($pokedex['types']  )
                            @php
                                foreach ($pokedex['types']  as $poke) {
                                    ($poke['slot'] == 1) ? $poketype = $poke['type'] ['name']: $poketype2 = $poke['type'] ['name'];
                                }  
                             @endphp 
                        @endisset
                        <h4 class="text-center font"> {{isset($poketype) ? $poketype : ''}}  {{ isset($poketype2) ?  '|' :'' }}  {{ isset($poketype2) ?  $poketype2 :'' }}</h4>
                    </h3>
                    @isset($pokedex ['abilities'] )
                        <h3 class=" text-center font">abilities :</h3>
                        <div class="d-flex justify-content-center">
                            @foreach ($pokedex ['abilities']  as  $poke )
                                <h5 class=" mx-1 text-center font"> {{ $poke['ability']['name'] }} </h5>
                            @endforeach  
                        </div>
                    @endisset
                    <div class="card-footer">
                        <img class="card-img-top font" src=" {{isset( $pokedex ['sprites']['front_default']) ? $pokedex ['sprites']['front_default'] :''}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" style="position: fixed; top: 50%; right: 255px; width: 100px;" href="{{ route('next' ,isset($pokedex ['id']) ? $pokedex ['id'] : '0') }}">Next</a>
        <a class="btn btn-primary" style="position: fixed; top: 50%;left: 255px;width: 100px;" href="{{ route('before' ,isset($pokedex ['id']) ? $pokedex ['id'] : '0') }}" >Before</a >
    </div>
</div>
@endsection