<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrecoSocioRequest;
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
        return view('admin.inscrever.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(PrecoSocioRequest $request)
    {

        $item = new socio_price();
        $item->name = $request->nome;
        $item->min_age = $request->idade_minima;
        $item->max_age = $request->idade_maxima;
        $item->preco = $request->preco;

        $item->save();

        Session::flash('Success', 'Pacote Inserido!');
        return back();
    }

        /**
     * Display the specified resource.
     *
     * @param \App\Models\socio_price
     * @return \Illuminate\Http\Response
     */
    public function show(socio_price $item)
    {

        return view('admin.inscrever.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\socio_price $inscrever
     * @return \Illuminate\Http\Response
     */
    public function edit(socio_price $inscrever, Request $request)
    {
        return view('admin.inscrever.edit', compact('inscrever'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\socio_price $item
     * @return  \Illuminate\Http\Response
     */

    public function update(PrecoSocioRequest $request, socio_price $inscrever)
    {

        $inscrever->name = $request->nome;
        $inscrever->min_age = $request->idade_minima;
        $inscrever->max_age = $request->idade_maxima;
        $inscrever->preco = $request->preco;

        $inscrever->save();

        Session::flash('success', 'Pacote Atualizado!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\socio_price $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(socio_price $inscrever)
    {
        $inscrever->delete();
        Session::flash('success', 'Pacote Apagado!');
        return back();
    }

}
