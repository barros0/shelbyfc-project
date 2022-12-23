<?php

namespace App\Http\Controllers;

use App\Models\socio_price;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Session;

class InscreverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscrever = socio_price::all();
        return view('admin.inscrever.index', compact('inscrever'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     

}
