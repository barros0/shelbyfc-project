<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\News;
use App\Models\News_Categories;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Session;


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
        $this->validate($request, [
            'title' => 'required',
            'small_description' => 'required',
            'body' => 'required',
            'categories' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $categorias = $request->categories;
        $image = $request->image;

        $new =  new News();
        $new->title = $request->title;
        $new->small_description = $request->small_description;
        $new->body = $request->body;

        $extension = $image->getClientOriginalExtension();
        $image_name = $image->getClientOriginalName() . time() . '.' . $extension;
        $image->move(public_path('images/noticias'), $image_name);
        $new->image = $image_name;

        $new->save();

        foreach ($categorias as $category) {
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
