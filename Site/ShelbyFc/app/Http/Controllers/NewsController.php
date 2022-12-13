<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\News;
use App\Models\News_Categories;
use Illuminate\Http\Request;
use Psy\Util\Str;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.news.create', compact('categories'));
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
            'titulo' => 'required',
            'body' => 'required',
            'categorias' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);


        $categories = $request->categorias;
        $image = $request->imagem;

        $new =  new News();
        $new->title = $request->title;
        $new->body = $request->body;

        if($image){
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getClientOriginalName().time().'.' . $extension;
            $image->move(public_path('noticias/'), $image_name);
            $new->image = $image_name;
        }
        $new->save();

        foreach ($categories as $category) {
            $addcategory = new News_Categories();
            $addcategory->news_id = $new->id;
            $addcategory->categories_id = $category;
            $addcategory->save();
        }

        Session::flash('success', 'Noticia inserida!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $new
     * @return \Illuminate\Http\Response
     */
    public function show($new)
    {

            return view('admin.news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $new
     * @return \Illuminate\Http\Response
     */
    public function edit($new)
    {
        $categories = Categorie::all();
        return view('admin.news.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $new)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $new
     * @return \Illuminate\Http\Response
     */
    public function destroy($new)
    {
        //
    }
}
