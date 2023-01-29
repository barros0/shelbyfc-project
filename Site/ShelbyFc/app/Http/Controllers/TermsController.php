<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $terms = Terms::all();
        return view('admin.terms.index', compact('terms'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = Terms::all();
        return view('admin.terms.create', compact('terms'));
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
            'titulo' => 'required',
            'texto' => 'required',
            'categoria' => 'required',
        ]);

       

        $terms = new Terms();
        $terms->titulo = $request->titulo;
        $terms->texto = $request->texto;
        $terms->categoria = $request->categoria;
    
        
        $terms->save();

        Session::flash('success', 'term inserida!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Terms $terms
     * @return \Illuminate\Http\Response
     */
    public function show(Terms $terms)
    {

        return view('admin.terms.index',compact('terms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Terms $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Terms $term)
    {
        return view('admin.terms.edit', compact('term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Terms $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terms $term)
    {

        $this->validate($request, [
            'titulo' => 'required',
            'texto' => 'required',
            'categoria' => 'required',
         
        ]);


        $term->titulo = $request->titulo;
        $term->texto = $request->texto;
        $term->categoria = $request->categoria;
        



        $term->save();


        Session::flash('success', 'Noticia atualizada!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Terms $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terms $term)
    {
        $term->delete();
        Session::flash('success', 'term Apagada!');
        return back();
    }
}
