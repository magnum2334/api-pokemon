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
        return view('home' );
    }
    public function search(Request $request)
    {   
        $request->validate([
            'name' => 'required',    
        ]);
        $linkpokemon='https://pokeapi.co/api/v2/pokemon/';        
        $pokemonSearch=$request->name;
        $search=$linkpokemon.$pokemonSearch;
        $pokemon = Http::get($search);
        $pokemonfined = $pokemon->json();
        
        return view('home' ,compact('pokemonfined'));
    }
    
}
