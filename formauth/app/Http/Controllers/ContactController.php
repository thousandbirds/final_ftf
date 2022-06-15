<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Contorller;
use App\Http\Requests\ContactRequest;
use App\Models\contactform;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {

        $contact = new contactform();
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->description = $request->input('description');
        $contact->drop_list = $request->input('drop_list');

        $contact->save();

        return redirect()->route('contact-form')->with('success', 'Дані було добавлено');
       // return view('contactform');
    }  
}
