<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $api = Http::get('https://pokeapi.co/api/v2/pokemon/1');
        $pokemon = $api->json();
        
        foreach ($pokemon['types'] as $poke) {
           ($poke['slot'] == 1) ? $pokemonName=$poke['type']['name'] : $pokemonName1=$poke['type']['name'];
        }
        
        
      
        return view('home' , compact('pokemon', 'pokemonName','pokemonName1'));
    }
}
