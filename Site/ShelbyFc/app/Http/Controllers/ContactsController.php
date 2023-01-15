<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Session;

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
}
