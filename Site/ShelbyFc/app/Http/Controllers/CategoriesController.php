<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Session;
use Psy\Util\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $image = $request->image;
        if($image){
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName().Str::random(5).'.' . $extension;
            $image->move(public_path('categories/'), $image_name);
        }

        $categoria = new Categorie();
        $categoria->name = $request->name;
        $categoria->image = $image_name;
        $categoria->save();

        Session::flash('success', 'Categoria adicionada!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $image = $request->image;
        if($image){
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName().Str::random(5).'.' . $extension;
            $image->move(public_path('categories/'), $image_name);
        }

        $categorie->name = $request->name;
        $categorie->image = $image_name;
        $categorie->save();

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
