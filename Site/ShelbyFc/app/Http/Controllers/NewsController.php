<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewRequest;
use App\Models\Categorie;
use App\Models\News;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);

        $image = $request->image;

        $new = new News();
        $new->title = $request->title;
        $new->small_description = $request->small_description;
        $new->body = $request->body;
        $new->categorie_id = $request->categorie_id;

        $extension = $image->getClientOriginalExtension();
        $image_name = $image->getATime() . '.' . $extension;
        $image->move(public_path('images/noticias'), $image_name);
        $new->image = $image_name;

        $new->save();

        Session::flash('success', 'Noticia inserida!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

        return view('admin.news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Categorie::all();
        return view('admin.news.edit', compact('categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewRequest $request, News $news)
    {

        $image = $request->image;

        $news->title = $request->title;
        $news->small_description = $request->small_description;
        $news->body = $request->body;
        $news->categorie_id = $request->categorie_id;

        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $image_name = $image->getATime() . '.' . $extension;
            $image->move(public_path('images/noticias'), $image_name);
            $news->image = $image_name;
        }

        $news->save();

        /* foreach ($categorias as $category) {
            //check a se a categoria noticia existe
            $check_categorie_new = News_Categories::where('categorie_id', $category)->where('new_id', $new->id)->exists();

            /*
            if ($check_categorie_new) {
                $addcategory = new News_Categories();
                $addcategory->news_id = $new->id;
                $addcategory->categories_id = $category;
                $addcategory->save();
            }*/
        //}

        Session::flash('success', 'Noticia atualizada!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        Session::flash('success', 'Noticia Apagada!');
        return back();
    }
}
