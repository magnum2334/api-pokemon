@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4 ">
        <h1 class="text-center font"> pokemon search for :   <a href="{{ route('pokedex') }}" class="font btn btn-danger">pokedex</a> </h1>
        <h1 class="text-center font"> search for  :   <a href="{{ route('filter') }}" class="font btn btn-primary">type_filter</a> </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('search', ['method' => 'POST', 'url' => route('search')])    
        </div>
        <div class="col-4">
            <div class="card p-3">
                <div class="card-header">
                    <h3 class="mx-1 font text-center"  >{{ isset($pokemonfined ['id']) ? '': 'search by pokemon' }}</h3>
                    <h2 class=" card-title text-center font">{{ isset($pokemonfined ['name']) ? 'pokemon :':'' }} {{ isset($pokemonfined ['name']) ? $pokemonfined ['name'] :'' }}</h2>
                </div>
                <div class="card-body">
                    <h3 class="text-center font" > {{  isset($pokemonfined ['id'] ) ? 'pokedex :' :''}} {{  isset($pokemonfined ['id'] ) ? $pokemonfined ['id'] :''}}</h3>
                    <h3 class="text-center mb-1">{{  isset($pokemonfined ['id']) ? 'types': ''  }}<br>  
                        @isset($pokemonfined['types']  )
                            @php
                                 foreach ($pokemonfined['types']  as $poke) {
                                     ($poke['slot'] == 1) ? $poketype = $poke['type'] ['name']: $poketype2 = $poke['type'] ['name'];
                                 }  
                             @endphp 
                        @endisset
                        <h4 class="text-center font"> {{isset($poketype) ? $poketype : ''}}  {{ isset($poketype2) ?  '|' :'' }}  {{ isset($poketype2) ?  $poketype2 :'' }}</h4>
                    </h3>
                    @isset($pokemonfined ['abilities'] )
                        <h3 class=" text-center font">abilities :</h3>
                        <div class="d-flex justify-content-center">
                            @foreach ($pokemonfined ['abilities']  as  $poke )
                                <h5 class=" mx-1 text-center font"> {{ $poke['ability']['name'] }} </h5>
                            @endforeach  
                        </div>
                    @endisset
                    <div class="card-footer">
                        <img class="card-img-top font" src=" {{isset( $pokemonfined ['sprites']['front_default']) ? $pokemonfined ['sprites']['front_default'] :''}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
