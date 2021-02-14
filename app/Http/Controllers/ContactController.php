<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact')->with('success', 'Сообщение было добавлено');
    }

    public function allData()
    {
        $contact = new Contact();
        // return view('messages', ['data' => $contact->orderBy('id', 'desc')->skip(1)->take(2)->get()]);
        return view('messages', ['data' => $contact->where('subject', '<>', 'Второе сообщение')->get()]);
    }


}
