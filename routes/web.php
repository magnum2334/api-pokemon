<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search/pokemon/', [HomeController::class, 'search'])->name('search');
Route::get('/pokedex', [HomeController::class, 'pokedex'])->name('pokedex');
Route::get('/pokedex/next/{pokemon_id}', [HomeController::class, 'next'])->name('next');
Route::get('/pokedex/before/{pokemon_id}', [HomeController::class, 'before'])->name('before');
Route::post('/pokedex/filtertype/', [HomeController::class, 'filterPokemon'])->name('filterPokemon');
Route::get('/pokedex/filtertype/', [HomeController::class, 'filter'])->name('filter');
Route::get('/pokedex/show/{name}', [HomeController::class, 'show'])->name('show_pokemon');
