<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\helpers\Consult;

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
        $pokemonSearch=$request->name;
        $pokemonfined= Consult::ConsultPokemon($pokemonSearch);     
        return view('home' ,compact('pokemonfined'));
    }

    public function pokedex()
    {   
        $pokedex= Consult::ConsultPokemon($pokemonSearch=1);

        return view('pokedex',compact('pokedex') );
    }

    public function next ($pokemon_id)
    {   
        $siguiente=($pokemon_id+1);
        $pokedex= Consult::ConsultPokemon($siguiente);
         
        return view('pokedex',compact('pokedex') );
    }

    public function before ($pokemon_id)
    {   
        
        $anterior=($pokemon_id-1);
        $pokedex= Consult::ConsultPokemon($anterior);

        return view('pokedex',compact('pokedex') );
    }

    public function filterPokemon (Request $request){

        $request->validate([
            'type' => 'required',    
        ]);
        $type = $request->type;

        $pokemon= Consult::ConsultType($type);
        return view('filterpokemon',get_defined_vars());
    }

    public function filter()
    {   
        $type = 'fire';
        $pokemon= Consult::ConsultType($type);
        return view('filterpokemon',get_defined_vars());
    }

    public function show($name)
    {   
        $pokemon= Consult::ConsultPokemon($name);
        return view('show' ,get_defined_vars());
    }
}
