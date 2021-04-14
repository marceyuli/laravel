<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request){
        $msg = request()->validate([ //metodo validar datos a traves del request
            'name' => 'required',  //el name de cada casilla que esta en el form
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ],[
            'name.required'=>'necesito tu nombre'
        ]);
        //enviar el mail
        Mail::to('yulianamarcela200@gmail.com')->queue(new MessageReceived($msg));
    }
}
