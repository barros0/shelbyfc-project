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

     public function create()
    {
        $precos = socio_price::all();
        return view('admin.inscrever.create', compact('precos'));
    }
     
     /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'idade' => 'required',
            'preco' => 'required',
        ]);

        $item = new socio_price();
        $item->name = $request->name;
        $item->idade = $request->idade;
        $item->preco = $request->preco;

        $item->save();

        Session::flash('success', 'Pacote Inserido!');
        return back();
    }

        /**
     * Display the specified resource.
     *
     * @param \App\Models\socio_price 
     * @return \Illuminate\Http\Response
     */
    public function show(socio_price $inscrever)
    {

        return view('admin.inscrever.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\socio_price $inscrever
     * @return \Illuminate\Http\Response
     */
    public function edit(socio_price $inscrever)
    {
        $inscrever = socio_price::all();
        return view('admin.inscrever.edit', compact('inscrever'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\socio_price $inscrever
     * @return \Illuminate\Http\Response 
     */

    public function update(Request $request, socio_price $inscrever)
    {

        $this->validate($request, [
            'name' => 'required',
            'idade' => 'required',
            'preco' => 'required',
        ]);

        $inscrever->name = $request->name;
        $inscrever->idade = $request->idade;
        $inscrever->preco = $request->preco;

        $inscrever->save();

        Session::flash('success', 'Pacote Atualizado!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\socio_price $inscrever
     * @return \Illuminate\Http\Response
     */
    public function destroy(socio_price $inscrever)
    {
        $inscrever->delete();
        Session::flash('success', 'Noticia Apagada!');
        return back();
    }

}
