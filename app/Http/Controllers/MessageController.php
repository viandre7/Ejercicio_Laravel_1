<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    // function store( request $request ) {
    //     return $request->get('name');
    // }
    function store() {

        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required | min:20'
         ], [
             'name.required' => 'Por favor digíte el nombre',
         ]);

        Mail::to('viandregarcia@hotmail.com')->queue(new MessageReceived($msg));

        return back()->with('status','El mensaje fue enviado con éxito');
    }
}
