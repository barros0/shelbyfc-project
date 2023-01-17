<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Session;
use Mail;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy(Contacts $contact)
    {
        $contact->delete();
        Session::flash('success', 'Report Apagado!');
        return back();
    }
    public function show(Contacts $contacts)
    {
        return view('admin.contacts.index',compact('contacts'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        $contact = new Contacts();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // laetrar para queque
        Mail::send('email.contacts.user', compact('contact'), function ($message) use ($contact) {
            $message->to($contact->email);
            $message->subject('Obrigado pelo seu contacto!');
        });
        Mail::send('email.contacts.admin', compact('contact'), function ($message) use ($contact) {
            $message->to(env('ADMIN_EMAIL'));
            $message->subject('Obrigado pelo seu contacto!');
        });



        Session::flash('success', 'Mensagem Enviada!');
        return back();
    }
}
