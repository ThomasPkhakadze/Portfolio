<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.article.articleIndex', ['articles' => $articles]);
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
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'body_ge' => 'required|string',
            'body_en' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $article = new Article;

        $article->title_ge = $request->title_ge;
        $article->title_en = $request->title_en;
        $article->body_ge = $request->body_ge;
        $article->body_en = $request->body_en;
        $article->url = $request->url;

        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path("images/"), $newfilename);
        $lastPath = "images/" . $newfilename;
        $request['image'] = $lastPath;
        $article->image = $lastPath;

        $article->save();

        return redirect()->route('article.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $article= Article::find($id);

       return view('admin.article.articleEdit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $this->validate($request, [
            'title_ge' => 'required|string',
            'title_en' => 'required|string',
            'body_ge' => 'required|string',
            'body_en' => 'required|string',
            'url' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        

        $article->title_ge = $request->title_ge;
        $article->title_en = $request->title_en;
        $article->body_ge = $request->body_ge;
        $article->body_en = $request->body_en;
        $article->url = $request->url;

        if(!empty($request->image))
        {
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $article->image = $lastPath;
        }

        $article->save();

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('article.index');
    }
}
