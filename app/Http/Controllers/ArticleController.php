<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Catagory;
use Auth;

class ArticleController extends Controller
{
    public function index(){
         $article = Article::with('catagory','user','likes')->get();
         $catagory = Catagory::all();
     return view('article',['article' => $article,'catagory' => $catagory]);


    }

    public function store(Request $request){
        if(Auth::check()){
        $article = Article::create(
            [
               'title' => $request->input('title'),
               'user_id' => Auth()->user()->id,
               'body' =>$request->input('body'),
               'catagory_id' =>$request->input('catagory_id')
            ]
        );
       }
    }
}
