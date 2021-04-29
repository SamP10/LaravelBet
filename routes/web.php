<?php

use App\Http\Controllers\BetController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BetController::class, 'index'])->name('index');
Route::get('/game', [BetController::class, 'game'])->name('game-index');
Route::get('/betting', [BetController::class, 'betting'])->name('bet-index');
Route::get('/casino', [BetController::class, 'casino'])->name('table-index');
Route::get('/betting/horses', [BetController::class, 'horse'])->name('horse-index');
Route::get('/betting/matches', [BetController::class, 'matches'])->name('matches-index');
Route::get('/betting/league', [BetController::class, 'league'])->name('league-index');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
