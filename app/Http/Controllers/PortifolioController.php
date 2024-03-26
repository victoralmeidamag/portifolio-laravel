<?php

namespace App\Http\Controllers;


class PortifolioController extends Controller
{
    public function github()
    {
        return redirect('https://github.com/victoralmeidamag');
    }
    public function githubFilmes()
    {
        return redirect('https://github.com/victoralmeidamag/Filmes-Laravel');
    }
    public function gitFlappy()
    {
        return redirect('https://github.com/victoralmeidamag/flappyBird');
    }
    public function githubPrevisao()
    {
        return redirect('https://github.com/victoralmeidamag/previsaoDoTempo');
    }
    public function linkedin()
    {
        return redirect('http://linkedin.com/in/victor-hugo-almeida-magalhaes');
    }
    public function whatsapp()
    {
        return redirect('https://wa.me//5514998569255?text=Olá,%20vim%20através%20do%20seu%20portifólio');
    }
    public function download()
    {
        $arquivo = 'archive/CURRICULO (1).pdf';
        return response()->download(public_path($arquivo));
    }
}
