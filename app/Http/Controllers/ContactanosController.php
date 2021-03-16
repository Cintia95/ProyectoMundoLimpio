<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function store(){
        $correo = new ContactanosMailable;
        Mail::to('cintiabw1995@gmail.com')->send($correo);
    }
    
}
