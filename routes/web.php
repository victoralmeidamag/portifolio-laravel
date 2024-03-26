<?php

use App\Http\Controllers\PortifolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('index');
});
Route::get('/index', function () {
    return view('index');
})->name('index');

route::get('/github/filmes', [PortifolioController::class, 'githubFilmes'])->name('filmes');
route::get('/github/previsao', [PortifolioController::class, 'githubPrevisao'])->name('previsao');
route::get('/github/flappy', [PortifolioController::class, 'gitFlappy'])->name('flappy');
route::get('/github', [PortifolioController::class, 'github'])->name('github');
route::get('/linkedin', [PortifolioController::class, 'linkedin'])->name('linkedin');
route::get('/whatsapp', [PortifolioController::class, 'whatsapp'])->name('whatsapp');
route::get('/download', [PortifolioController::class, 'download'])->name('download');
