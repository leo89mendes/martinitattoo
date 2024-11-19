<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function index()
    {
        
    }
    public function store(Request $request): RedirectResponse{
        
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'cel' => 'required|numeric',
            'question' => 'required',
        ], [
            'name.required' => 'Você precisa preencher o seu nome.',
            'email.email' => 'Este não é um e-mail válido.',
            'cel.numeric' => 'Você precisa preencher um número válido',
            'question.required' => 'Faça sua pergunta, por favor.'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        Mail::to('martini@martinitattoo.com')->send(new ContactEmail([
            'name' => $request->name,
            'email' => $request->email,
            'cel' => $request->cel,
            'question' => $request->question
        ]));
        return redirect()->route('home')->with('message', 'Mensagem enviada com sucesso!');
    }
}
