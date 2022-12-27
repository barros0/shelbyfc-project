<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){

        return view('admin.index');
    }


    public function contacts(){

        $contacts = Contacts::orderby('created_at','desc')->get();

        return view('admin.contacts.index', compact('contacts'));
    }


    public function contact(Contacts $contact){


        return view('admin.contacts.show');
    }


}
