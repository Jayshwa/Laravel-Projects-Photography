<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store()
    {
        //data from request('') is pulled from the 'name' attribute
        $contact = new Contact();
        $contact -> name = request('name');
        $contact -> email = request('email');
        $contact -> subject = request('subject');
        $contact -> message = request('message');

        $contact -> save();

        return redirect('/')->with('msg','Thanks for your message!');
    }
}
