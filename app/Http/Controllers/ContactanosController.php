<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function store(Request $request){
        $correo = new ContactanosMailable($request->all());
        Mail::to('cintiabw1995@gmail.com')->send($correo);

        return redirect()->route('inicio')->with('info', 'Mensaje enviado');
    }
    
}
