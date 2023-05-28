<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectRickAndMortyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProjectRickAndMortyController::class, 'index'])->name('ricknmorty');
Route::get('/characters', [ProjectRickAndMortyController::class, 'getAllCharacters'])->name('characters');
Route::get('/character', [ProjectRickAndMortyController::class, 'getCharacter'])->name('character');
Route::get('/ncharacter', [ProjectRickAndMortyController::class, 'nextPage'])->name('next');
Route::get('/pcharacter', [ProjectRickAndMortyController::class, 'previousPage'])->name('prev');
