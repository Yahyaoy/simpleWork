<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function show($articalId){
        $articles = Article::find($articalId);
        return view('articles.show',['articles'=>$articles]);
    }

}
