<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PortifolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('index');
});
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/github/filmes', [PortifolioController::class, 'githubFilmes'])->name('filmes');
Route::get('/github/previsao', [PortifolioController::class, 'githubPrevisao'])->name('previsao');
Route::get('/github/flappy', [PortifolioController::class, 'gitFlappy'])->name('flappy');
Route::get('/github', [PortifolioController::class, 'github'])->name('github');
Route::get('/linkedin', [PortifolioController::class, 'linkedin'])->name('linkedin');
Route::get('/whatsapp', [PortifolioController::class, 'whatsapp'])->name('whatsapp');
Route::get('/download', [PortifolioController::class, 'download'])->name('download');
Route::get('/contato',[ContatoController::class, 'index'])->name('index.contato');
Route::post('/contato/store',[ContatoController::class, 'store'])->name('store.contato');
