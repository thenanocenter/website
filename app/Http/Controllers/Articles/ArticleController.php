<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = \App\Article::all();
        return view('articles.index',['articles'=>$articles]);
    }

    public function show(Request $request, $articleKey)
    {
        $article = \App\Article::findByKey($articleKey);
        if(!$article){
            abort(404);
        }
        if(!empty($article->external_url)){
            return redirect($article->external_url);
        }
        return view('articles.show',[
            'article'=>$article,
        ]);
    }

}
