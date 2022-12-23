<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Categorie::all();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ]);

        $categories = new Categorie();
        $categories->name = $request->name;
        $categories->save();

        Session::flash('success', 'Categoria adicionada!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categories)
    {


        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category){

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $category)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category->name = $request->name;
        $category->save();

        Session::flash('success', 'Categoria atualizada!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categories)
    {
        $categories->delete();
        Session::flash('success', 'Categoria eliminada!');
        return back();
    }
}
