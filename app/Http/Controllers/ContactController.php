<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contact;

class ContactController extends Controller
{
    public function store(Request $request) {
        // validate
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|min:3'
        ]);

        // store
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->msg = $request->msg;
        $contact->save();

        // redirect
        return redirect(route('home'))->with('success', 'Thanks! ' . $request->name . ' we will be in touch as soon as possible!');
    }
}
