<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){
        request()->validate([ //metodo validar datos a traves del request
            'name' => 'required',  //el name de cada casilla que esta en el form
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ],[
            'name.required'=>'necesito tu nombre'
        ]);
    }
}
