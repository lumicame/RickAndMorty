<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatabaseController;

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

Route::redirect('/', 'character');
///GET ALL CHARACTES
Route::get('/character', [HomeController::class, 'indexCharacter'])->name('charactes');
Route::get('/character/{id}', [HomeController::class, 'showCharacter'])->name('characte.show');

///GET ALL LOCATIONS
Route::get('/locations', [HomeController::class, 'indexLocation'])->name('locations');
Route::get('/location/{id}', [HomeController::class, 'showLocation'])->name('location.show');

//GET ALL EPISODES
Route::get('/episodes', [HomeController::class, 'indexEpisode'])->name('episodes');
Route::get('/episode/{id}', [HomeController::class, 'showEpisode'])->name('episode.show');


///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////


Route::redirect('databases', 'databases/character');
///GET ALL CHARACTES FROM DATABASE
Route::get('/databases/character', [DatabaseController::class, 'indexCharacter'])->name('charactes.database');
Route::get('/databases/character/{id}', [DatabaseController::class, 'showCharacter'])->name('character.show.database');
Route::get('/databases/character/show/{id}', [DatabaseController::class, 'RenderCharacter']);

///GET ALL LOCATIONS FROM DATABASE
Route::get('/databases/locations', [DatabaseController::class, 'indexLocation'])->name('locations.database');
Route::get('/databases/location/{id}', [DatabaseController::class, 'showLocation'])->name('location.show.database');
Route::get('/databases/location/show/{id}', [DatabaseController::class, 'RenderLocation']);


//GET ALL EPISODES FROM DATABASE
Route::get('/databases/episodes', [DatabaseController::class, 'indexEpisode'])->name('episodes.database');
Route::get('/databases/episode/{id}', [DatabaseController::class, 'showEpisode'])->name('episode.show.database');
Route::get('/databases/episode/show/{id}', [DatabaseController::class, 'RenderEpisode']);
