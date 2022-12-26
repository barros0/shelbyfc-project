<?php

namespace App\Http\Controllers;


use App\Models\Faqs;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Session;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqs = Faqs::all();
        return view('admin.faqs.create', compact('faqs'));
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
            'pergunta' => 'required',
            'resposta' => 'required',
            'categoria' => 'required',
        ]);

       

        $faq = new Faqs();
        $faq->pergunta = $request->pergunta;
        $faq->resposta = $request->resposta;
        $faq->categoria = $request->categoria;
    
        
        $faq->save();

        Session::flash('success', 'FaQ inserida!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Faqs $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faqs)
    {

        return view('admin.faqs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Faqs $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(Faqs $faqs)
    {
        $faqs = Faqs::all();
        return view('admin.faqs.edit', compact('faqs', 'faqs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Faqs $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faqs $faqs)
    {

        $this->validate($request, [
            'pergunta' => 'required',
            'resposta' => 'required',
            'categoria' => 'required',
         
        ]);


        $faqs->pergunta = $request->pergunta;
        $faqs->resposta = $request->resposta;
        $faqs->categoria = $request->categoria;
        



        $faqs->save();


        Session::flash('success', 'Noticia atualizada!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Faqs $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faqs $faqs)
    {
        $faqs->delete();
        Session::flash('success', 'FaQ Apagada!');
        return back();
    }

}
