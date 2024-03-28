<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index(){
        var_dump('oi.index');
    }
    public function store(Request $request){
        Mail::to('victorhugo.almeidamag@gmail.com', 'Victor')->send(new Contato([
            'de_nome'=> $request->input('de_nome'),
            'de_email'=> $request->input('de_email'),
            'de_assunto'=>$request->input('de_assunto'),
            'de_message'=>$request->input('message'),
        ]));
        return redirect('index');
    }
}
