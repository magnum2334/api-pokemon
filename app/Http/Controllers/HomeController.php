<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use App\Http\Controllers\helpers\Consult;

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
        return view('home' );
    }
    public function search(Request $request)
    {   
        $request->validate([
            'name' => 'required',    
        ]);
        $linkpokemon='https://pokeapi.co/api/v2/pokemon/';        
        $pokemonSearch=$request->name;
        $pokemon = Http::get($linkpokemon.$pokemonSearch);
        $pokemonfined = $pokemon->json();
        
        
        return view('home' ,compact('pokemonfined'));
    }

    public function pokedex()
    {   
        $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon/1');
        $pokedex = $pokemon->json();
        
        return view('pokedex',compact('pokedex') );
    }
    public function next ($pokemon_id)
    {   
        $siguiente=($pokemon_id+1);
        $siguiente=strval($siguiente);
        $linkpokemon='https://pokeapi.co/api/v2/pokemon/';  
        $pokemon = Http::get($linkpokemon.$siguiente);
        $pokedex = $pokemon->json();
         
        return view('pokedex',compact('pokedex') );
    }

    public function before ($pokemon_id)
    {   
        
        $anterior=($pokemon_id-1);
        $anterior=strval($anterior);
        $linkpokemon='https://pokeapi.co/api/v2/pokemon/';  
        $pokemon = Http::get($linkpokemon.$anterior);
        $pokedex = $pokemon->json();
        
        return view('pokedex',compact('pokedex') );
    }

    
    public function filterPokemon (Request $request){

        $request->validate([
            'type' => 'required',    
        ]);
        $type = $request->type;

        $pokemon = Http::get('https://pokeapi.co/api/v2/type/'.$type);
        $pokedex = $pokemon->json();
        $pokemon = json_decode(json_encode($pokedex))->pokemon;
        
        return view('filterpokemon', compact('pokemon', 'type'));
    }
    public function filter()
    {   
        $type = 'fire';
        $pokemon = Http::get('https://pokeapi.co/api/v2/type/'.$type);
        $pokedex = $pokemon->json();
        $pokemon = json_decode(json_encode($pokedex))->pokemon;
        dd($pokedex);
        return view('filterpokemon', compact('pokemon', 'type'));
    }
    public function show($name)
    {   

        $pokemon= \Consult::ConsultPokemon($name);

        return view('show');
    }
}
