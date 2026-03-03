<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
       // dd($request);

       $motivo_c = MotivoContato::all();

        return view('site.contato',['motivo_c'=>$motivo_c]);
    }

    public function salvar(Request $req){
        $req->validate([
            'nome' => 'required|min:3|max:60',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contato_id' => 'required',
            'mensagem' => ['required','max:500']
        ],
        [
            'nome.required' => 'O campo nome precisa ser preenchido.',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'Máximo de 60 caracteres para o campo nome.',
            'telefone.required' => 'O campo telefone precisa ser preenchido.',
            'email.required' => 'O campo email precisa ser preenchido.',
            'email.email' => 'O campo email precisa ser um email válido.',
            'motivo_contato_id.required' => 'O campo motivo do contato precisa ser preenchido.',
            'mensagem.required' => 'O campo mensagem precisa ser preenchido.'
        ]
    );

       SiteContato::create($req->all());

       return redirect('/');
    }
}
