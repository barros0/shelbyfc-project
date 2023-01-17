<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){

        return view('admin.index');
    }


    public function contacts(){

        $contacts = Contact::orderby('created_at','desc')->get();

        return view('admin.contacts.index', compact('contacts'));
    }




}
