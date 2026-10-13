<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

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


Route::resource('superhero', 'SuperheroController');
Route::get('/superheroes', [SuperheroController::class, 'index']);
Route::post('superhero', 'SuperheroController@store')->name('superhero.store'); 
Route::get('superhero/create', 'SuperheroController@create')->name('superhero.create'); 
Route::get('superhero/{id}', 'SuperheroController@show')->name('superhero.show'); 
Route::patch('superhero/{id}', 'SuperheroController@update')->name('superhero.update'); 
Route::delete('superhero/{id}', 'SuperheroController@destroy')->name('superhero.destroy'); 
Route::get('superhero/{id}/edit', 'SuperheroController@edit')->name('superhero.edit'); 
